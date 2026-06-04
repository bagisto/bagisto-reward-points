import { expect, type Locator, type Page } from "@playwright/test";

type SimpleProductData = {
    sku: string;
    name: string;
    urlKey: string;
    price: string;
    weight: string;
    shortDescription: string;
    description: string;
    inventoryQty: string;
};

type CreatedProduct = SimpleProductData & {
    id: number;
};

export class AdminProductPage {
    readonly page: Page;
    readonly productGridTitle: Locator;
    readonly successMessage: Locator;

    constructor(page: Page) {
        this.page = page;
        this.productGridTitle = page.locator("#app").getByText("Products").first();
        this.successMessage = page
            .locator("#app")
            .getByText(/created successfully|updated successfully|deleted successfully/i)
            .first();
    }

    async open(): Promise<void> {
        await this.page.goto("admin/catalog/products");
        await expect(this.productGridTitle).toBeVisible();
    }

    async createSimpleProduct(data: SimpleProductData): Promise<CreatedProduct> {
        await this.open();

        const createResponse = await this.requestJson<{
            data: { redirect_url: string };
        }>("admin/catalog/products/create", "POST", {
            type: "simple",
            attribute_family_id: "1",
            sku: data.sku,
        });

        const productId = Number(createResponse.data.redirect_url.match(/edit\/(\d+)/)?.[1]);

        if (!productId) {
            throw new Error(`Product id was not found in ${createResponse.data.redirect_url}`);
        }

        await this.submitForm(`admin/catalog/products/edit/${productId}`, "PUT", {
            sku: data.sku,
            name: data.name,
            url_key: data.urlKey,
            short_description: data.shortDescription,
            description: data.description,
            price: data.price,
            weight: data.weight,
            status: "1",
            visible_individually: "1",
            guest_checkout: "1",
            manage_stock: "1",
            channel: "default",
            locale: "en",
            "channels[]": "1",
            "inventories[1]": data.inventoryQty,
        });

        await this.open();

        return {
            ...data,
            id: productId,
        };
    }

    async deleteProduct(productId: number): Promise<void> {
        await this.requestJson(`admin/catalog/products/edit/${productId}`, "DELETE");
    }

    private async requestJson<T>(
        path: string,
        method: "POST" | "DELETE",
        body: Record<string, string> = {},
    ): Promise<T> {
        return this.page.evaluate(
            async ({ path, method, body }) => {
                const response = await fetch((window as any).__resolveAppUrl(path), {
                    method,
                    headers: {
                        Accept: "application/json",
                        "Content-Type": "application/json",
                        "X-CSRF-TOKEN": (window as any).__csrfToken(),
                        "X-Requested-With": "XMLHttpRequest",
                    },
                    body: method === "DELETE" ? undefined : JSON.stringify(body),
                });

                if (!response.ok) {
                    throw new Error(`${method} ${path} failed: ${response.status} ${await response.text()}`);
                }

                return response.json();
            },
            { path, method, body },
        ) as Promise<T>;
    }

    private async submitForm(
        path: string,
        method: "PUT",
        data: Record<string, string>,
    ): Promise<void> {
        await this.page.evaluate(
            async ({ path, method, data }) => {
                const form = new URLSearchParams();

                Object.entries(data).forEach(([key, value]) => form.append(key, value));

                const response = await fetch((window as any).__resolveAppUrl(path), {
                    method,
                    headers: {
                        Accept: "text/html, application/xhtml+xml",
                        "Content-Type": "application/x-www-form-urlencoded",
                        "X-CSRF-TOKEN": (window as any).__csrfToken(),
                        "X-Requested-With": "XMLHttpRequest",
                    },
                    body: form,
                });

                if (!response.ok && !response.redirected) {
                    throw new Error(`${method} ${path} failed: ${response.status} ${await response.text()}`);
                }
            },
            { path, method, data },
        );
    }
}
