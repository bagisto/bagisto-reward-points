import { expect, type Locator, type Page } from "@playwright/test";

export class RewardSystemDetailsPage {
    readonly page: Page;
    readonly pageTitle: Locator;
    readonly exportButton: Locator;
    readonly datagrid: Locator;

    constructor(page: Page) {
        this.page = page;
        this.pageTitle = page
            .locator("#app")
            .getByText("Reward System Details")
            .first();
        this.exportButton = page.getByRole("button", { name: /Export/i });
        this.datagrid = page.locator("#app .table-responsive").first();
    }

    async open(): Promise<void> {
        await this.page.goto("admin/rewards/system");
        await expect(this.pageTitle).toBeVisible();
    }

    async expectDetailsSectionVisible(): Promise<void> {
        await this.open();

        await expect(this.exportButton).toBeVisible();
        await expect(this.datagrid).toBeVisible();
        await expect(this.datagrid.getByText(/ID|Id/).first()).toBeVisible();
        await expect(this.datagrid.getByText("Name").first()).toBeVisible();
        await expect(this.datagrid.getByText("Reward Points").first()).toBeVisible();
        await expect(
            this.datagrid.getByText("Used Rewards Points").first(),
        ).toBeVisible();
        await expect(this.datagrid.getByText("Status").first()).toBeVisible();
    }
}
