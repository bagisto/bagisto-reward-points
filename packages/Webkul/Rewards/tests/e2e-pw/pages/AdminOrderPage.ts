import { expect, type Locator, type Page } from "@playwright/test";
import { DatabaseHelper } from "../utils/DatabaseHelper";

export class AdminOrderPage {
    readonly page: Page;
    readonly orderPageTitle: Locator;

    constructor(page: Page) {
        this.page = page;
        this.orderPageTitle = page.locator("#app").getByText("Orders").first();
    }

    async completeLatestOrderForCustomer(email: string): Promise<string> {
        await this.page.goto("admin/sales/orders");
        await expect(this.orderPageTitle).toBeVisible();

        const order = DatabaseHelper.latestOrderByCustomerEmail(email);
        const orderItemIds = DatabaseHelper.orderItemIds(order.id);

        await this.createInvoice(order.id, orderItemIds);

        const invoice = DatabaseHelper.latestInvoiceByOrderId(order.id);

        await this.createShipment(order.id, orderItemIds);

        const currentOrder = DatabaseHelper.latestOrderByCustomerEmail(email);
        const currentInvoice = DatabaseHelper.latestInvoiceByOrderId(order.id);

        if (currentOrder.status !== "completed" && currentInvoice.state !== "paid") {
            await this.createTransaction(invoice.id, invoice.base_grand_total);
        }

        await expect
            .poll(() => DatabaseHelper.latestOrderByCustomerEmail(email).status, {
                message: "Order should be completed after invoice, shipment, and transaction",
            })
            .toBe("completed");

        return order.id;
    }

    private async createInvoice(
        orderId: string,
        orderItemIds: string[],
    ): Promise<void> {
        const data = orderItemIds.reduce<Record<string, string>>((payload, itemId) => {
            payload[`invoice[items][${itemId}]`] = "1";

            return payload;
        }, {});

        await this.submitForm(`admin/sales/invoices/create/${orderId}`, data);
    }

    private async createShipment(
        orderId: string,
        orderItemIds: string[],
    ): Promise<void> {
        const data = orderItemIds.reduce<Record<string, string>>(
            (payload, itemId) => {
                payload[`shipment[items][${itemId}][1]`] = "1";

                return payload;
            },
            {
                "shipment[source]": "1",
                "shipment[carrier_title]": "E2E Carrier",
                "shipment[track_number]": `E2E-${Date.now()}`,
            },
        );

        await this.submitForm(`admin/sales/shipments/create/${orderId}`, data);
    }

    private async createTransaction(
        invoiceId: string,
        amount: string,
    ): Promise<void> {
        await this.submitForm("admin/sales/transactions/create", {
            invoice_id: invoiceId,
            payment_method: "cashondelivery",
            amount,
        });
    }

    private async submitForm(
        path: string,
        data: Record<string, string>,
    ): Promise<void> {
        await this.page.evaluate(
            async ({ path, data }) => {
                const form = new URLSearchParams();

                Object.entries(data).forEach(([key, value]) => form.append(key, value));

                const response = await fetch((window as any).__resolveAppUrl(path), {
                    method: "POST",
                    headers: {
                        Accept: "application/json, text/html",
                        "Content-Type": "application/x-www-form-urlencoded",
                        "X-CSRF-TOKEN": (window as any).__csrfToken(),
                        "X-Requested-With": "XMLHttpRequest",
                    },
                    body: form,
                });

                if (!response.ok && !response.redirected) {
                    throw new Error(`POST ${path} failed: ${response.status} ${await response.text()}`);
                }
            },
            { path, data },
        );
    }
}
