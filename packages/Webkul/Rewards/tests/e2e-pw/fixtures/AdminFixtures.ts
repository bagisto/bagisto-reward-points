import { test as base, expect, type Page } from "@playwright/test";
import fs from "fs";
import { ADMIN_AUTH_STATE_PATH } from "../playwright.config";

import { AdminPage as Admin } from "../pages/AdminPage";

interface AdminPage extends Page {
    fillInTinymce: (iframeSelector: string, content: string) => Promise<void>;
}

type AdminFixtures = {
    adminPage: AdminPage;
};

export const test = base.extend<AdminFixtures>({
    adminPage: async ({ browser }, use) => {
        const authExists = fs.existsSync(ADMIN_AUTH_STATE_PATH);

        const context = await browser.newContext(
            authExists ? { storageState: ADMIN_AUTH_STATE_PATH } : {}
        );

        await context.addInitScript(() => {
            (window as any).__csrfToken = () => {
                return (
                    document
                        .querySelector('meta[name="csrf-token"]')
                        ?.getAttribute("content") ||
                    (document.querySelector(
                        'input[name="_token"]'
                    ) as HTMLInputElement | null)?.value ||
                    ""
                );
            };

            (window as any).__resolveAppUrl = (path: string) => {
                const normalizedPath = path.replace(/^\/+/, "");
                const markers = ["/admin/", "/customer/", "/checkout/", "/api/"];
                const marker = markers.find((value) =>
                    window.location.pathname.includes(value)
                );

                if (!marker) {
                    return new URL(normalizedPath, window.location.href).toString();
                }

                const basePath = window.location.pathname.slice(
                    0,
                    window.location.pathname.indexOf(marker) + 1
                );

                return `${window.location.origin}${basePath}${normalizedPath}`;
            };
        });

        const page = await context.newPage();
        const admin = await new Admin(page)


        if (!authExists) {
            /**
            * Authenticate the admin user.
            */
            await admin.adminLogin("admin@example.com", "admin123");

            /**
            * Save authentication state to a file.
            */
            await context.storageState({ path: ADMIN_AUTH_STATE_PATH });
        } else {
            /**
            * Navigate to the dashboard.
            */
            await page.goto("admin/dashboard");
        }

        if (page.url().includes("admin/login")) {
            /**
            * Authenticate the admin user.
            */
            await admin.adminLogin("admin@example.com", "admin123");

            /**
            * Save authentication state to a file.
            */
            await context.storageState({ path: ADMIN_AUTH_STATE_PATH });
        }

        /**
        * Extend the page object with custom methods.}
        
        */
        (page as AdminPage).fillInTinymce = async function (
            iframeSelector: string,
            content: string
        ) {
            await page.waitForSelector(iframeSelector);
            const iframe = page.frameLocator(iframeSelector);
            const editorBody = iframe.locator("body");
            await editorBody.click();
            await editorBody.press("Control+a");
            await editorBody.press("Backspace");
            await editorBody.pressSequentially(content);
            await expect(editorBody).toHaveText(content);
        };

        await use(page as AdminPage);

        await context.close();
    },
});

export { expect };