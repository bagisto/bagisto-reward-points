import { Page, Locator, expect } from "@playwright/test";


export class AdminPage  {
    readonly page: Page;
    readonly emailInput: Locator;
    readonly passwordInput: Locator;
    readonly signInButton: Locator;
    readonly megaSearchInput: Locator;
    readonly profileButton: Locator;
    readonly signOutLink: Locator;

    constructor(page: Page) {
        this.page = page;
        this.emailInput = page.getByPlaceholder("Email Address");
        this.passwordInput = page.getByPlaceholder("Password");
        this.signInButton = page.getByRole("button", { name: "Sign In" });
        this.megaSearchInput = page.getByPlaceholder("Mega Search").first();
        this.profileButton = page.getByRole("button", { name: "E" });
        this.signOutLink = page.getByRole("link", { name: "Sign Out" });
    }



    async adminLogin(email: string, password: string) {
        await this.page.goto("admin/login", {
            waitUntil: "networkidle",
            timeout: 300000,
        });

        await this.emailInput.fill(email);
        await this.passwordInput.fill(password);

        await Promise.all([
            this.page.waitForNavigation({
                waitUntil: "networkidle",
                timeout: 300000,
            }),
            this.signInButton.click(),
        ]);

        await this.verifyLogin();
    }

    async verifyLogin() {
        await expect(this.megaSearchInput).toBeVisible({ timeout: 300000 });
    }

    async adminLogout() {
        await this.page.waitForTimeout(1000);
        await this.profileButton.click();
        await this.signOutLink.click();

    }

    async verifyLogout() {
        await expect(this.passwordInput.first()).toBeVisible();
    }
}
