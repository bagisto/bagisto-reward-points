import { expect, type Locator, type Page } from "@playwright/test";

type ProductRewardRecord = {
    id: number;
    product_name: string;
    product_sku: string;
    reward_points: string | number;
    status: string | number;
};

export class RewardProductPage {
    readonly page: Page;
    readonly pageTitle: Locator;
    readonly createRewardButton: Locator;
    readonly successMessage: Locator;

    constructor(page: Page) {
        this.page = page;
        this.pageTitle = page
            .locator("#app")
            .getByText("Reward Point on Product")
            .first();
        this.createRewardButton = page.getByRole("link", {
            name: "Create Product Reward",
        });
        this.successMessage = page
            .locator("#app")
            .getByText(/Product Reward .*successfully/i)
            .first();
    }

    async open(): Promise<void> {
        await this.page.goto("admin/rewards/product-list");
        await expect(this.pageTitle).toBeVisible();
    }

    async createReward(productId: number, rewardPoints: string): Promise<void> {
        await this.submitForm("admin/rewards/product-list/store", {
            product_id: String(productId),
            reward_points: rewardPoints,
            status: "1",
        });

        await this.open();
    }

    async updateReward(
        rewardId: number,
        productId: number,
        rewardPoints: string,
    ): Promise<void> {
        await this.submitForm(`admin/rewards/product-list/update/${rewardId}`, {
            product_id: String(productId),
            reward_points: rewardPoints,
            status: "1",
        });

        await this.open();
    }

    async deleteReward(rewardId: number): Promise<void> {
        await this.requestJson(`admin/rewards/product-list/delete/${rewardId}`, "POST");
    }

    async findRewardBySku(sku: string): Promise<ProductRewardRecord | undefined> {
        const payload = await this.fetchDatagrid("admin/rewards/product-list", sku);
        const records = this.extractRecords<ProductRewardRecord>(payload, [
            "id",
            "product_name",
            "product_sku",
            "reward_points",
            "status",
        ]);

        return records.find((record) => record.product_sku === sku);
    }

    async expectReward(sku: string, rewardPoints: string): Promise<ProductRewardRecord> {
        const reward = await expect
            .poll(async () => this.findRewardBySku(sku), {
                message: `Reward record should exist for SKU ${sku}`,
            })
            .not.toBeUndefined()
            .then(async () => this.findRewardBySku(sku));

        expect(reward).toBeTruthy();
        expect(String(reward!.reward_points)).toBe(rewardPoints);

        return reward!;
    }

    async expectRewardDeleted(sku: string): Promise<void> {
        await expect
            .poll(async () => this.findRewardBySku(sku), {
                message: `Reward record should be deleted for SKU ${sku}`,
            })
            .toBeUndefined();
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
                        Accept: "text/html, application/xhtml+xml",
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

    private async requestJson(path: string, method: "POST"): Promise<void> {
        await this.page.evaluate(
            async ({ path, method }) => {
                const response = await fetch((window as any).__resolveAppUrl(path), {
                    method,
                    headers: {
                        Accept: "application/json",
                        "Content-Type": "application/x-www-form-urlencoded",
                        "X-CSRF-TOKEN": (window as any).__csrfToken(),
                        "X-Requested-With": "XMLHttpRequest",
                    },
                    body: new URLSearchParams(),
                });

                if (!response.ok) {
                    throw new Error(`${method} ${path} failed: ${response.status} ${await response.text()}`);
                }
            },
            { path, method },
        );
    }

    private async fetchDatagrid(
        path: string,
        searchValue?: string,
    ): Promise<unknown> {
        return this.page.evaluate(
            async ({ path, searchValue }) => {
                const url = new URL((window as any).__resolveAppUrl(path));

                if (searchValue) {
                    url.searchParams.append("filters[all][]", searchValue);
                }

                url.searchParams.append("pagination[per_page]", "50");

                const response = await fetch(url, {
                    headers: {
                        Accept: "application/json",
                        "X-Requested-With": "XMLHttpRequest",
                    },
                });

                if (!response.ok) {
                    throw new Error(`GET ${path} failed: ${response.status} ${await response.text()}`);
                }

                return response.json();
            },
            { path, searchValue },
        );
    }

    private extractRecords<T extends object>(
        payload: unknown,
        requiredKeys: string[],
    ): T[] {
        const records: T[] = [];
        const visit = (value: unknown) => {
            if (!value || typeof value !== "object") {
                return;
            }

            if (Array.isArray(value)) {
                value.forEach(visit);

                return;
            }

            const candidate = value as Record<string, unknown>;

            if (requiredKeys.every((key) => candidate[key] != null)) {
                records.push(candidate as T);

                return;
            }

            Object.values(value).forEach(visit);
        };

        visit(payload);

        return records;
    }
}
