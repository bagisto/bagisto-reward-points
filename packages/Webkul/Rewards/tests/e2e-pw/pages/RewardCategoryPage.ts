import { expect, type Locator, type Page } from "@playwright/test";

type CreatedCategoryReward = {
    categoryName: string;
    rewardPoints: string;
};

export class RewardCategoryPage {
    readonly page: Page;
    readonly pageTitle: Locator;
    readonly createRewardButton: Locator;
    readonly createPageTitle: Locator;
    readonly editPageTitle: Locator;
    readonly rewardPointsInput: Locator;
    readonly statusSelect: Locator;
    readonly categorySearchInput: Locator;
    readonly categoryIdInput: Locator;
    readonly categoryResultItems: Locator;
    readonly saveRewardButton: Locator;
    readonly successMessage: Locator;

    constructor(page: Page) {
        this.page = page;
        this.pageTitle = page
            .locator("#app")
            .getByText("Reward Point on Category")
            .first();
        this.createRewardButton = page.getByRole("link", {
            name: "Create Category Reward",
        });
        this.createPageTitle = page
            .locator("#app")
            .getByText("Add Reward Point on Category")
            .first();
        this.editPageTitle = page
            .locator("#app")
            .getByText("Edit Reward Point on Category")
            .first();
        this.rewardPointsInput = page.locator('input[name="reward_points"]');
        this.statusSelect = page.locator('select[name="status"]');
        this.categorySearchInput = page.locator(
            'input[placeholder="Select Category"]',
        );
        this.categoryIdInput = page.locator('input[name="category_id"]');
        this.categoryResultItems = page.locator(
            'input[name="category_id"] + ul li:visible',
        );
        this.saveRewardButton = page.getByRole("button", {
            name: "Save Category Reward",
        });
        this.successMessage = page
            .locator("#app")
            .getByText(/Category Reward .*successfully/i)
            .first();
    }

    async open(): Promise<void> {
        await this.page.goto("admin/rewards/category-list");
        await expect(this.pageTitle).toBeVisible();
    }

    async createRewardUsingUi(
        rewardPoints: string,
        categoryName: string,
    ): Promise<CreatedCategoryReward> {
        await this.open();
        await this.createRewardButton.click();
        await expect(this.createPageTitle).toBeVisible();

        await this.rewardPointsInput.fill(rewardPoints);
        await this.statusSelect.selectOption("1");

        const selectedCategoryName = await this.selectAvailableCategory(
            categoryName,
        );

        await this.saveRewardButton.click();
        await expect(this.successMessage).toBeVisible();
        await expect(this.pageTitle).toBeVisible();

        return {
            categoryName: selectedCategoryName,
            rewardPoints,
        };
    }

    async expectRewardVisible(
        categoryName: string,
        rewardPoints: string,
    ): Promise<void> {
        await this.open();

        const row = this.rewardRow(categoryName, rewardPoints);

        await expect(row).toBeVisible();
        await expect(row).toContainText(categoryName);
        await expect(row).toContainText(rewardPoints);
        await expect(row).toContainText("Active");
    }

    async updateRewardUsingUi(
        categoryName: string,
        currentRewardPoints: string,
        updatedRewardPoints: string,
    ): Promise<CreatedCategoryReward> {
        await this.open();

        const row = this.rewardRow(categoryName, currentRewardPoints);

        await expect(row).toBeVisible();
        await row.locator(".icon-edit").first().click();
        await expect(this.editPageTitle).toBeVisible();

        await expect(this.categorySearchInput).toHaveValue(categoryName);
        await this.rewardPointsInput.fill(updatedRewardPoints);
        await this.statusSelect.selectOption("1");
        await this.page
            .getByRole("button", { name: "Update Category Reward" })
            .click();

        await expect(this.successMessage).toBeVisible();
        await expect(this.pageTitle).toBeVisible();

        return {
            categoryName,
            rewardPoints: updatedRewardPoints,
        };
    }

    async deleteRewardUsingUi(
        categoryName: string,
        rewardPoints: string,
    ): Promise<void> {
        await this.open();

        const row = this.rewardRow(categoryName, rewardPoints);

        await expect(row).toBeVisible();
        await row.locator(".icon-delete").first().click();

        const deleteResponse = this.page.waitForResponse(
            (response) =>
                response
                    .url()
                    .includes("admin/rewards/category-list/delete/") &&
                response.request().method() === "POST",
        );

        await this.page
            .getByRole("button", { name: "Agree", exact: true })
            .click();
        await expect((await deleteResponse).ok()).toBeTruthy();

        await this.open();
        await expect(this.rewardRow(categoryName, rewardPoints)).toBeHidden();
    }

    private async selectAvailableCategory(categoryName: string): Promise<string> {
        const searchTerm = categoryName.slice(0, 3);

        await this.categorySearchInput.fill("");

        const searchResponse = this.page.waitForResponse(
            (response) =>
                response
                    .url()
                    .includes("admin/rewards/category-list/search-categories") &&
                response.request().method() === "POST",
        );

        await this.categorySearchInput.pressSequentially(searchTerm);
        await searchResponse;

        const result = this.categoryResultItems
            .filter({ hasText: categoryName })
            .first();

        await expect(result).toBeVisible();
        await result.click();
        await expect(this.categorySearchInput).toHaveValue(categoryName);
        await expect(this.categoryIdInput).not.toHaveValue("");

        return categoryName;
    }

    private rewardRow(categoryName: string, rewardPoints: string): Locator {
        return this.page
            .locator("#app .table-responsive .row")
            .filter({ hasText: categoryName })
            .filter({ hasText: rewardPoints })
            .first();
    }
}
