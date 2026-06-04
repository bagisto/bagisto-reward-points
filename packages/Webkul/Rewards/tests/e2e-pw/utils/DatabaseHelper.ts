import { execFileSync } from "child_process";

type QueryRow = Record<string, string>;

export class DatabaseHelper {
    static verifyCustomer(email: string): void {
        this.execute(
            `update customers set is_verified = 1, status = 1 where email = ${this.sqlString(email)}`,
        );
    }

    static createActiveCartForCustomer(email: string): void {
        this.execute(
            `update cart set is_active = 0 where customer_email = ${this.sqlString(email)}`,
        );

        this.execute(
            [
                "insert into cart (customer_email, customer_first_name, customer_last_name, is_guest, is_active, customer_id, channel_id,",
                "global_currency_code, base_currency_code, channel_currency_code, cart_currency_code, exchange_rate, created_at, updated_at)",
                "select email, first_name, last_name, 0, 1, id, 1, 'USD', 'USD', 'USD', 'USD', 1, now(), now()",
                "from customers",
                `where email = ${this.sqlString(email)}`,
                "limit 1",
            ].join(" "),
        );
    }

    static latestOrderByCustomerEmail(email: string): QueryRow {
        return this.first(
            `select id, increment_id, status, base_grand_total from orders where customer_email = ${this.sqlString(email)} order by id desc limit 1`,
        );
    }

    static orderItemIds(orderId: string): string[] {
        return this.query(
            `select id from order_items where order_id = ${this.sqlString(orderId)} and parent_id is null order by id`,
        ).map((row) => row.id);
    }

    static latestInvoiceByOrderId(orderId: string): QueryRow {
        return this.first(
            `select id, state, base_grand_total from invoices where order_id = ${this.sqlString(orderId)} order by id desc limit 1`,
        );
    }

    static rewardForCustomerProduct(
        customerEmail: string,
        productId: number,
    ): QueryRow {
        return this.first(
            [
                "select reward_points.id, reward_points.reward_points, reward_points.status",
                "from reward_points",
                "join customers on customers.id = reward_points.customer_id",
                `where customers.email = ${this.sqlString(customerEmail)}`,
                `and reward_points.product_id = ${this.sqlString(String(productId))}`,
                "and reward_points.product_purchased = 1",
                "order by reward_points.id desc limit 1",
            ].join(" "),
        );
    }

    static first(query: string): QueryRow {
        const [row] = this.query(query);

        if (!row) {
            throw new Error(`No database row returned for query: ${query}`);
        }

        return row;
    }

    static query(query: string): QueryRow[] {
        const output = this.execute(query);
        const lines = output.trim().split("\n").filter(Boolean);

        if (!lines.length) {
            return [];
        }

        const columns = lines[0].split("\t");

        return lines.slice(1).map((line) => {
            const values = line.split("\t");

            return columns.reduce<QueryRow>((row, column, index) => {
                row[column] = values[index] ?? "";

                return row;
            }, {});
        });
    }

    private static execute(query: string): string {
        return execFileSync(
            "mysql",
            [
                `-u${process.env.DB_USERNAME ?? "root"}`,
                `-p${process.env.DB_PASSWORD ?? "webkul"}`,
                process.env.DB_DATABASE ?? "reward_points",
                "--batch",
                "--raw",
                "-e",
                query,
            ],
            { encoding: "utf8" },
        );
    }

    private static sqlString(value: string): string {
        return `'${value.replace(/\\/g, "\\\\").replace(/'/g, "\\'")}'`;
    }
}
