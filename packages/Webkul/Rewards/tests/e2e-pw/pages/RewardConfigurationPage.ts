import { expect, type Locator, type Page } from "@playwright/test";

type RewardConfigurationData = {
    rewardWhenCustomerRegister: string;
    rewardWhenCustomerRegisterExpDays: string;
    rewardWhenCustomerDob: string;
    rewardWhenCustomerDobExpDays: string;
    rewardWhenProductReviewed: string;
    rewardWhenProductReviewedExpDays: string;
    rewardUsedAtOneTime: string;
    emailNotification: "0" | "1";
};

export class RewardConfigurationPage {
    readonly page: Page;
    readonly pageTitle: Locator;
    readonly moduleStatusInput: Locator;
    readonly moduleStatusToggle: Locator;
    readonly rewardWhenCustomerRegisterInput: Locator;
    readonly rewardWhenCustomerRegisterExpDaysInput: Locator;
    readonly rewardWhenCustomerDobInput: Locator;
    readonly rewardWhenCustomerDobExpDaysInput: Locator;
    readonly rewardWhenProductReviewedInput: Locator;
    readonly rewardWhenProductReviewedExpDaysInput: Locator;
    readonly rewardUsedAtOneTimeInput: Locator;
    readonly emailNotificationSelect: Locator;
    readonly saveConfigurationButton: Locator;
    readonly successMessage: Locator;
    readonly adminSidebar: Locator;
    readonly rewardPointMenuLink: Locator;
    readonly rewardPointProductMenuLink: Locator;

    constructor(page: Page) {
        this.page = page;
        this.pageTitle = page.locator("#app").getByText("Reward Point").first();
        this.moduleStatusInput = page.locator(
            'input[type="checkbox"][name="reward[general][general][module-status]"]',
        );
        this.moduleStatusToggle = page.locator(
            'label[for="reward[general][general][module-status]"]',
        );
        this.rewardWhenCustomerRegisterInput = page.locator(
            'input[name="reward[general][general][reward-when-customer-register]"]',
        );
        this.rewardWhenCustomerRegisterExpDaysInput = page.locator(
            'input[name="reward[general][general][reward-when-customer-register-exp-days]"]',
        );
        this.rewardWhenCustomerDobInput = page.locator(
            'input[name="reward[general][general][reward-when-customer-dob]"]',
        );
        this.rewardWhenCustomerDobExpDaysInput = page.locator(
            'input[name="reward[general][general][reward-when-customer-dob-exp-days]"]',
        );
        this.rewardWhenProductReviewedInput = page.locator(
            'input[name="reward[general][general][reward-when-product-reviewed]"]',
        );
        this.rewardWhenProductReviewedExpDaysInput = page.locator(
            'input[name="reward[general][general][reward-when-product-reviewed-exp-days]"]',
        );
        this.rewardUsedAtOneTimeInput = page.locator(
            'input[name="reward[general][general][reward-used-at-one-time]"]',
        );
        this.emailNotificationSelect = page.locator(
            'select[name="reward[general][general][email-notification]"]',
        );
        this.saveConfigurationButton = page.getByRole("button", {
            name: "Save Configuration",
        });
        this.successMessage = page
            .locator("#app")
            .getByText(/updated successfully|saved successfully/i)
            .first();
        this.adminSidebar = page.locator("aside, nav").first();
        this.rewardPointMenuLink = page
            .locator('a[href*="/admin/rewards/product-list"]')
            .filter({ hasText: "Reward Point" })
            .first();
        this.rewardPointProductMenuLink = page
            .getByRole("link", { name: "Reward Point on Product" })
            .first();
    }

    async open(): Promise<void> {
        await this.page.goto("admin/configuration/reward/general");
        await expect(this.pageTitle).toBeVisible();
        await expect(this.saveConfigurationButton).toBeVisible();
    }

    async enableModule(): Promise<void> {
        await expect(this.moduleStatusInput).toHaveCount(1);

        if (!(await this.isModuleEnabled())) {
            await this.moduleStatusToggle.click();
        }

        await expect
            .poll(() => this.isModuleEnabled(), {
                message: "Reward point module status should be enabled",
            })
            .toBe(true);
    }

    async fillRequiredConfiguration(data: RewardConfigurationData): Promise<void> {
        await this.rewardWhenCustomerRegisterInput.fill(
            data.rewardWhenCustomerRegister,
        );
        await this.rewardWhenCustomerRegisterExpDaysInput.fill(
            data.rewardWhenCustomerRegisterExpDays,
        );
        await this.rewardWhenCustomerDobInput.fill(data.rewardWhenCustomerDob);
        await this.rewardWhenCustomerDobExpDaysInput.fill(
            data.rewardWhenCustomerDobExpDays,
        );
        await this.rewardWhenProductReviewedInput.fill(
            data.rewardWhenProductReviewed,
        );
        await this.rewardWhenProductReviewedExpDaysInput.fill(
            data.rewardWhenProductReviewedExpDays,
        );
        await this.rewardUsedAtOneTimeInput.fill(data.rewardUsedAtOneTime);
        await this.emailNotificationSelect.selectOption(data.emailNotification);
    }

    async saveConfiguration(): Promise<void> {
        await this.saveConfigurationButton.click();
        await expect(this.successMessage).toBeVisible();
    }

    async verifyConfigurationValues(
        data: RewardConfigurationData,
    ): Promise<void> {
        await expect(this.moduleStatusInput).toBeChecked();
        await expect(this.rewardWhenCustomerRegisterInput).toHaveValue(
            data.rewardWhenCustomerRegister,
        );
        await expect(this.rewardWhenCustomerRegisterExpDaysInput).toHaveValue(
            data.rewardWhenCustomerRegisterExpDays,
        );
        await expect(this.rewardWhenCustomerDobInput).toHaveValue(
            data.rewardWhenCustomerDob,
        );
        await expect(this.rewardWhenCustomerDobExpDaysInput).toHaveValue(
            data.rewardWhenCustomerDobExpDays,
        );
        await expect(this.rewardWhenProductReviewedInput).toHaveValue(
            data.rewardWhenProductReviewed,
        );
        await expect(this.rewardWhenProductReviewedExpDaysInput).toHaveValue(
            data.rewardWhenProductReviewedExpDays,
        );
        await expect(this.rewardUsedAtOneTimeInput).toHaveValue(
            data.rewardUsedAtOneTime,
        );
        await expect(this.emailNotificationSelect).toHaveValue(
            data.emailNotification,
        );
    }

    async openDashboard(): Promise<void> {
        await this.page.goto("admin/dashboard");
        await expect(this.adminSidebar).toBeVisible();
    }

    async verifyRewardPointMenuIsVisible(): Promise<void> {
        await expect(this.rewardPointMenuLink).toBeVisible();
        await this.rewardPointMenuLink.click();
        await expect(this.rewardPointProductMenuLink).toBeVisible();
    }

    private async isModuleEnabled(): Promise<boolean> {
        return this.moduleStatusInput.evaluate((element) => {
            const input = element as HTMLInputElement;

            return input.checked;
        });
    }
}
