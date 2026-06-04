import { expect, type Locator, type Page } from "@playwright/test";

type CartRewardData = {
    rewardPoints: string;
    amountFrom: string;
    amountTo: string;
    startDate: string;
    endDate: string;
    status?: "Active" | "Inactive";
};

export class RewardCartPage {
    readonly page: Page;
    readonly pageTitle: Locator;
    readonly createRewardButton: Locator;
    readonly createPageTitle: Locator;
    readonly editPageTitle: Locator;
    readonly rewardPointsInput: Locator;
    readonly amountFromInput: Locator;
    readonly amountToInput: Locator;
    readonly startDateInput: Locator;
    readonly endDateInput: Locator;
    readonly statusSelect: Locator;
    readonly saveRewardButton: Locator;
    readonly successMessage: Locator;

    constructor(page: Page) {
        this.page = page;
        this.pageTitle = page
            .locator("#app")
            .getByText("Reward Point on Cart")
            .first();
        this.createRewardButton = page.getByRole("link", {
            name: "Add Reward Point on Cart",
        });
        this.createPageTitle = page
            .locator("#app")
            .getByText("Add Reward Point on Cart")
            .first();
        this.editPageTitle = page
            .locator("#app")
            .getByText("Edit Reward Point on Cart")
            .first();
        this.rewardPointsInput = page.locator('input[name="reward_points"]');
        this.amountFromInput = page.locator('input[name="amount_from"]');
        this.amountToInput = page.locator('input[name="amount_to"]');
        this.startDateInput = page.locator('input[name="start_date"]');
        this.endDateInput = page.locator('input[name="end_date"]');
        this.statusSelect = page.locator('select[name="status"]');
        this.saveRewardButton = page.getByRole("button", {
            name: "Save Cart Reward",
        });
        this.successMessage = page
            .locator("#app")
            .getByText(/Cart Reward .*successfully/i)
            .first();
    }

    async open(): Promise<void> {
        await this.page.goto("admin/rewards/cart");
        await expect(this.pageTitle).toBeVisible();
    }

    async createRewardUsingUi(data: CartRewardData): Promise<CartRewardData> {
        await this.open();
        await this.createRewardButton.click();
        await expect(this.createPageTitle).toBeVisible();

        await this.rewardPointsInput.fill(data.rewardPoints);
        await this.amountFromInput.fill(data.amountFrom);
        await this.amountToInput.fill(data.amountTo);
        await this.setDateTime(this.startDateInput, data.startDate);
        await this.setDateTime(this.endDateInput, data.endDate);
        await this.statusSelect.selectOption("1");
        await this.saveRewardButton.click();

        await expect(this.successMessage).toBeVisible();
        await expect(this.pageTitle).toBeVisible();

        return data;
    }

    async expectRewardVisible(data: CartRewardData): Promise<void> {
        await this.open();

        const row = this.rewardRow(data);

        await expect(row).toBeVisible();
        await expect(row).toContainText(data.rewardPoints);
        await expect(row).toContainText(data.amountFrom);
        await expect(row).toContainText(data.amountTo);
        await expect(row).toContainText(data.status ?? "Active");
    }

    async updateRewardStatusUsingUi(
        data: CartRewardData,
        status: "Active" | "Inactive",
    ): Promise<CartRewardData> {
        await this.open();

        const row = this.rewardRow(data);

        await expect(row).toBeVisible();
        await row.locator(".icon-edit").first().click();
        await expect(this.editPageTitle).toBeVisible();

        await this.statusSelect.selectOption(status === "Active" ? "1" : "0");
        await this.page
            .getByRole("button", { name: "Update Cart Reward" })
            .click();

        await expect(this.successMessage).toBeVisible();
        await expect(this.pageTitle).toBeVisible();

        return {
            ...data,
            status,
        };
    }

    async deleteRewardUsingUi(data: CartRewardData): Promise<void> {
        await this.open();

        const row = this.rewardRow(data);

        await expect(row).toBeVisible();
        await row.locator(".icon-delete").first().click();

        const deleteResponse = this.page.waitForResponse(
            (response) =>
                response.url().includes("admin/rewards/cart/delete/") &&
                response.request().method() === "POST",
        );

        await this.page
            .getByRole("button", { name: "Agree", exact: true })
            .click();
        await expect((await deleteResponse).ok()).toBeTruthy();

        await this.open();
        await expect(this.rewardRow(data)).toBeHidden();
    }

    private async setDateTime(locator: Locator, value: string): Promise<void> {
        await locator.evaluate((element, dateTime) => {
            const input = element as HTMLInputElement;

            input.value = dateTime;
            input.dispatchEvent(new Event("input", { bubbles: true }));
            input.dispatchEvent(new Event("change", { bubbles: true }));
        }, value);

        await expect(locator).toHaveValue(value);
    }

    private rewardRow(data: CartRewardData): Locator {
        return this.page
            .locator("#app .table-responsive .row")
            .filter({ hasText: data.rewardPoints })
            .filter({ hasText: data.amountFrom })
            .filter({ hasText: data.amountTo })
            .first();
    }
}
