import { expect } from "@playwright/test";
import { test } from "../../fixtures/AdminFixtures";
import { AdminOrderPage } from "../../pages/AdminOrderPage";
import { AdminProductPage } from "../../pages/AdminProductPage";
import { RewardConfigurationPage } from "../../pages/RewardConfigurationPage";
import { RewardProductPage } from "../../pages/RewardProductPage";
import { RewardCategoryPage } from "../../pages/RewardCategoryPage";
import { RewardCategorySpecificPage } from "../../pages/RewardCategorySpecificPage";
import { ShopCheckoutPage } from "../../pages/ShopCheckoutPage";
import { DatabaseHelper } from "../../utils/DatabaseHelper";
import {
    generateDescription,
    generateEmail,
    generateFirstName,
    generateLastName,
    generateName,
    generateSKU,
    generateSlug,
} from "../../utils/faker";

test.describe.configure({ mode: "serial" });

test.describe("Reward Point System", () => {
    test("Configuration", async ({ adminPage }) => {
        const rewardConfiguration = new RewardConfigurationPage(adminPage);
        const configuration = {
            rewardWhenCustomerRegister: "10",
            rewardWhenCustomerRegisterExpDays: "30",
            rewardWhenCustomerDob: "20",
            rewardWhenCustomerDobExpDays: "30",
            rewardWhenProductReviewed: "5",
            rewardWhenProductReviewedExpDays: "15",
            rewardUsedAtOneTime: "100",
            emailNotification: "1" as const,
        };

        await rewardConfiguration.open();
        await rewardConfiguration.enableModule();
        await rewardConfiguration.fillRequiredConfiguration(configuration);
        await rewardConfiguration.saveConfiguration();

        await adminPage.reload();
        await rewardConfiguration.verifyConfigurationValues(configuration);

        await rewardConfiguration.openDashboard();
        await rewardConfiguration.verifyRewardPointMenuIsVisible();
    });

    test("Product Reward CRUD", async ({ adminPage }) => {
        const products = new AdminProductPage(adminPage);
        const rewards = new RewardProductPage(adminPage);

        const product = await products.createSimpleProduct({
            sku: generateSKU(),
            name: generateName(),
            urlKey: generateSlug(),
            price: "99",
            weight: "1",
            shortDescription: generateDescription(80),
            description: generateDescription(160),
            inventoryQty: "50",
        });

        await rewards.createReward(product.id, "15");

        const createdReward = await rewards.expectReward(product.sku, "15");

        await rewards.updateReward(createdReward.id, product.id, "25");

        const updatedReward = await rewards.expectReward(product.sku, "25");

        expect(updatedReward.id).toBe(createdReward.id);

        await rewards.deleteReward(updatedReward.id);

        await rewards.expectRewardDeleted(product.sku);

        await products.deleteProduct(product.id);
    });

    test("Category Reward CRUD", async ({ adminPage }) => {
        const rewards = new RewardCategoryPage(adminPage);
        const row = DatabaseHelper.query("select c.id, ct.name from categories c join category_translations ct on ct.category_id = c.id and ct.locale = 'en' limit 1")[0];
        const categoryId = Number(row.id);
        const categoryName = row.name;

        // create via API to avoid flaky search UI
        await adminPage.evaluate(
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
            {
                path: "admin/rewards/category-list/store",
                data: { category_id: String(categoryId), reward_points: "15", status: "1" },
            },
        );

        await rewards.expectRewardVisible(categoryName, "15");

        await rewards.updateRewardUsingUi(categoryName, "15", "25");

        await rewards.expectRewardVisible(categoryName, "25");

        await rewards.deleteRewardUsingUi(categoryName, "25");
    });

    test("Category Specific Time Reward CRUD", async ({ adminPage }) => {
        const rewards = new RewardCategorySpecificPage(adminPage);
        const row = DatabaseHelper.query("select c.id, ct.name from categories c join category_translations ct on ct.category_id = c.id and ct.locale = 'en' limit 1")[0];
        const categoryId = Number(row.id);
        const categoryName = row.name;

        const pad = (n: number) => String(n).padStart(2, "0");
        const makeDate = (daysOffset: number) => {
            const d = new Date(Date.now() + daysOffset * 24 * 60 * 60 * 1000);
            return `${d.getFullYear()}-${pad(d.getMonth() + 1)}-${pad(d.getDate())} ${pad(d.getHours())}:${pad(d.getMinutes())}:${pad(d.getSeconds())}`;
        };

        const start = makeDate(1);
        const end = makeDate(2);

        // create via API to avoid flaky search UI
        await adminPage.evaluate(
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
            {
                path: "admin/rewards/category-specific-time/store",
                data: { category_id: String(categoryId), reward_points: "30", start_time: start, end_time: end, status: "1" },
            },
        );

        const created = { categoryName, rewardPoints: "30", startTime: start, endTime: end };

        await rewards.expectRewardVisible(created);

        const updated = await rewards.updateRewardUsingUi(created, "35", start, end);

        await rewards.expectRewardVisible(updated);

        await rewards.deleteRewardUsingUi(updated);
    });

    let sharedShopContext: any;
    let sharedShopPage: any;
    let sharedProduct: any;
    const rewardPoints = "40";
    const customer = {
        firstName: generateFirstName(),
        lastName: generateLastName(),
        email: generateEmail(),
        password: "admin123",
    };

    test("Purchase Flow - Setup Shop Context", async ({ adminPage }) => {
        const browser = adminPage.context().browser();

        if (!browser) {
            throw new Error(
                "Browser instance is required for the shop customer context."
            );
        }

        sharedShopContext = await browser.newContext({
            baseURL: `${process.env.APP_URL}/`.replace(/\/+$/, "/"),
        });

        await sharedShopContext.addInitScript(() => {
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

        sharedShopPage = await sharedShopContext.newPage();
    });

    test("Purchase Flow - Create Product and Reward", async ({ adminPage }) => {
        const products = new AdminProductPage(adminPage);
        const rewards = new RewardProductPage(adminPage);

        sharedProduct = await products.createSimpleProduct({
            sku: generateSKU(),
            name: generateName(),
            urlKey: generateSlug(),
            price: "100",
            weight: "1",
            shortDescription: generateDescription(80),
            description: generateDescription(160),
            inventoryQty: "50",
        });

        await rewards.createReward(sharedProduct.id, rewardPoints);
        await rewards.expectReward(sharedProduct.sku, rewardPoints);
    });

    test("Purchase Flow - Register and Login Customer", async ({ adminPage }) => {
        const shop = new ShopCheckoutPage(sharedShopPage);
        await shop.registerCustomer(customer);
        await shop.loginCustomer(customer);
    });

    test("Purchase Flow - Checkout Product", async ({ adminPage }) => {
        const shop = new ShopCheckoutPage(sharedShopPage);
        await shop.checkoutProduct(sharedProduct.id, customer.email);
    });

    test("Purchase Flow - Complete Order and Verify Reward", async ({ adminPage }) => {
        const orders = new AdminOrderPage(adminPage);
        const shop = new ShopCheckoutPage(sharedShopPage);

        await orders.completeLatestOrderForCustomer(customer.email);

        const reward = DatabaseHelper.rewardForCustomerProduct(
            customer.email,
            sharedProduct.id
        );

        expect(reward.reward_points).toBe(rewardPoints);
        expect(reward.status).toBe("approved");

        await shop.expectRewardPointsVisible();

        await sharedShopContext.close();
    });
});

