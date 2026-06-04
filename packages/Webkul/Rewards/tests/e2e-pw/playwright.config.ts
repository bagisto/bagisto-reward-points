import { defineConfig, devices } from "@playwright/test";
import dotenv from "dotenv";
import fs from "fs";
import path from "path";
import { fileURLToPath } from "url";

const __filename = fileURLToPath(import.meta.url);
const __dirname = path.dirname(__filename);

export const TESTS_ROOT_PATH = __dirname;
export const STATE_DIR_PATH = `${TESTS_ROOT_PATH}/.state/`;
export const CUSTOMER_AUTH_STATE_PATH = `${STATE_DIR_PATH}/customer-auth.json`;
export const TENANT_AUTH_STATE_PATH = `${STATE_DIR_PATH}/tenant-auth.json`;
export const ADMIN_AUTH_STATE_PATH = `${STATE_DIR_PATH}/Admin-auth.json`;
export const TENANT_BASE_URL = process.env.TENANT_APP_URL || "http://site1.bagisto-saas.com";

function findNearestEnvFile(startDir: string): string | null {
    let currentDir = startDir;

    while (true) {
        const candidate = path.join(currentDir, ".env");
        if (fs.existsSync(candidate)) {
            return candidate;
        }

        const parentDir = path.dirname(currentDir);
        if (parentDir === currentDir) {
            return null;
        }

        currentDir = parentDir;
    }
}

const envPath = findNearestEnvFile(__dirname) ?? path.resolve(__dirname, "../../../../../.env");
dotenv.config({ path: envPath });

export default defineConfig({
    testDir: "./tests",

    timeout: 300 * 1000,

    expect: { timeout: 20 * 1000 },

    outputDir: "./test-results",

    fullyParallel: false,

    workers: 1,

    forbidOnly: !!process.env.CI,

    retries: 0,

    reportSlowTests: null,

    reporter: [
        [
            "html",
            {
                outputFolder: "./playwright-report",
            },
        ],
    ],

    use: {
        baseURL: `${process.env.APP_URL}/`.replace(/\/+$/, "/"),
        screenshot: { mode: "only-on-failure", fullPage: true },
        video: "retain-on-failure",
        trace: "retain-on-failure",
    },





    projects: [
        {
            name: "chromium",
            use: { ...devices["Desktop Chrome"] },
        },
    ],
});
