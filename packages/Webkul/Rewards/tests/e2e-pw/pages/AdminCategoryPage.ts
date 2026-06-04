import { expect, type Locator, type Page } from "@playwright/test";

type CategoryData = {
    name: string;
    slug: string;
    position: string;
    description: string;
};

export class AdminCategoryPage {
    readonly page: Page;
    readonly createPageTitle: Locator;
    readonly nameInput: Locator;
    readonly slugInput: Locator;
    readonly descriptionEditor: Locator;
    readonly positionInput: Locator;
    readonly firstFilterableAttributeCheckbox: Locator;
    readonly saveCategoryButton: Locator;
    readonly successMessage: Locator;

    constructor(page: Page) {
        this.page = page;
        this.createPageTitle = page
            .locator("#app")
            .getByText("Add New Category")
            .first();
        this.nameInput = page.locator('input[name="name"]');
        this.slugInput = page.locator('input[name="slug"]');
        this.descriptionEditor = page
            .frameLocator('iframe[title="Rich Text Area"]')
            .locator("body");
        this.positionInput = page.locator('input[name="position"]');
        this.firstFilterableAttributeCheckbox = page
            .locator('input[name="attributes[]"]')
            .first();
        this.saveCategoryButton = page.getByRole("button", {
            name: "Save Category",
        });
        this.successMessage = page
            .locator("#app")
            .getByText(/Category .*successfully/i)
            .first();
    }

    async createCategoryUsingUi(data: CategoryData): Promise<void> {
        await this.page.goto("admin/catalog/categories/create");
        await expect(this.createPageTitle).toBeVisible();

        await this.nameInput.fill(data.name);
        await this.slugInput.fill(data.slug);
        await this.descriptionEditor.click();
        await this.descriptionEditor.press("Control+a");
        await this.descriptionEditor.press("Backspace");
        await this.descriptionEditor.pressSequentially(data.description);
        await expect(this.descriptionEditor).toHaveText(data.description);
        await this.positionInput.fill(data.position);
        await this.firstFilterableAttributeCheckbox.check({ force: true });
        await this.saveCategoryButton.click();

        await expect(this.successMessage).toBeVisible();
    }
}
