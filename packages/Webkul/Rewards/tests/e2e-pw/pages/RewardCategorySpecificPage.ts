import { expect, type Locator, type Page } from "@playwright/test";

type CategorySpecificReward = {
    categoryName: string;
    rewardPoints: string;
    startTime: string;
    endTime: string;
};

export class RewardCategorySpecificPage {
    readonly page: Page;
    readonly pageTitle: Locator;
    readonly createRewardButton: Locator;
    readonly createPageTitle: Locator;
    readonly editPageTitle: Locator;
    readonly rewardPointsInput: Locator;
    readonly startTimeInput: Locator;
    readonly endTimeInput: Locator;
    readonly statusSelect: Locator;
    readonly categorySearchInput: Locator;
    readonly categoryIdInput: Locator;
    readonly categoryResultItems: Locator;
    readonly successMessage: Locator;

    constructor(page: Page) {
        this.page = page;
        this.pageTitle = page
            .locator("#app")
            .getByText("Reward Point on Category For Specific Time")
            .first();
        this.createRewardButton = page.getByRole("link", {
            name: "Create Category Time Specific Reward",
        });
        this.createPageTitle = page
            .locator("#app")
            .getByText("Add Reward Point on Category For Time Specific")
            .first();
        this.editPageTitle = page
            .locator("#app")
            .getByText("Edit Reward Point on Category For Time Specific")
            .first();
        this.rewardPointsInput = page.locator('input[name="reward_points"]');
        this.startTimeInput = page.locator('input[name="start_time"]');
        this.endTimeInput = page.locator('input[name="end_time"]');
        this.statusSelect = page.locator('select[name="status"]');
        this.categorySearchInput = page.locator(
            'input[placeholder="Select Category"]',
        );
        this.categoryIdInput = page.locator('input[name="category_id"]');
        this.categoryResultItems = page.locator(
            'input[name="category_id"] + ul li:visible',
        );
        this.successMessage = page
            .locator("#app")
            .getByText(/Category Reward .*successfully/i)
            .first();
    }

    async open(): Promise<void> {
        await this.page.goto("admin/rewards/category-specific-time");
        await expect(this.pageTitle).toBeVisible();
    }

    async createRewardUsingUi(
        categoryName: string,
        rewardPoints: string,
        startTime: string,
        endTime: string,
    ): Promise<CategorySpecificReward> {
        await this.open();
        await this.createRewardButton.click();
        await expect(this.createPageTitle).toBeVisible();

        await this.rewardPointsInput.fill(rewardPoints);
        await this.setDateTime(this.startTimeInput, startTime);
        await this.setDateTime(this.endTimeInput, endTime);
        await this.statusSelect.selectOption("1");
        await this.selectAvailableCategory(categoryName);

        await this.page
            .getByRole("button", {
                name: "Save Category Reward For Time Specific",
            })
            .click();

        await expect(this.successMessage).toBeVisible();
        await expect(this.pageTitle).toBeVisible();

        return {
            categoryName,
            rewardPoints,
            startTime,
            endTime,
        };
    }

    async updateRewardUsingUi(
        currentReward: CategorySpecificReward,
        updatedRewardPoints: string,
        updatedStartTime: string,
        updatedEndTime: string,
    ): Promise<CategorySpecificReward> {
        await this.open();

        const row = this.rewardRow(
            currentReward.categoryName,
            currentReward.rewardPoints,
        );

        await expect(row).toBeVisible();
        await row.locator(".icon-edit").first().click();
        await expect(this.editPageTitle).toBeVisible();

        await expect(this.categorySearchInput).toHaveValue(
            currentReward.categoryName,
        );
        await this.rewardPointsInput.fill(updatedRewardPoints);
        await this.setDateTime(this.startTimeInput, updatedStartTime);
        await this.setDateTime(this.endTimeInput, updatedEndTime);
        await this.statusSelect.selectOption("1");
        await this.page
            .getByRole("button", {
                name: "Update Category Reward For Time Specific",
            })
            .click();

        await expect(this.successMessage).toBeVisible();
        await expect(this.pageTitle).toBeVisible();

        return {
            categoryName: currentReward.categoryName,
            rewardPoints: updatedRewardPoints,
            startTime: updatedStartTime,
            endTime: updatedEndTime,
        };
    }

    async deleteRewardUsingUi(reward: CategorySpecificReward): Promise<void> {
        await this.open();

        const row = this.rewardRow(reward.categoryName, reward.rewardPoints);

        await expect(row).toBeVisible();
        await row.locator(".icon-delete").first().click();

        const deleteResponse = this.page.waitForResponse(
            (response) =>
                response
                    .url()
                    .includes("admin/rewards/category-specific-time/delete/") &&
                response.request().method() === "POST",
        );

        await this.page
            .getByRole("button", { name: "Agree", exact: true })
            .click();
        await expect((await deleteResponse).ok()).toBeTruthy();

        await this.open();
        await expect(this.rewardRow(reward.categoryName, reward.rewardPoints)).toBeHidden();
    }

    async expectRewardVisible(reward: CategorySpecificReward): Promise<void> {
        await this.open();

        const row = this.rewardRow(reward.categoryName, reward.rewardPoints);

        await expect(row).toBeVisible();
        await expect(row).toContainText(reward.categoryName);
        await expect(row).toContainText(reward.rewardPoints);
        await expect(row).toContainText("Active");
    }

    private async selectAvailableCategory(categoryName: string): Promise<void> {
        const searchTerm = categoryName.slice(0, 3);

        await this.categorySearchInput.fill("");

        const searchResponse = this.page.waitForResponse(
            (response) =>
                response
                    .url()
                    .includes(
                        "admin/rewards/category-specific-time/search-categories-specific",
                    ) && response.request().method() === "POST",
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

    private rewardRow(categoryName: string, rewardPoints: string): Locator {
        return this.page
            .locator("#app .table-responsive .row")
            .filter({ hasText: categoryName })
            .filter({ hasText: rewardPoints })
            .first();
    }
}
