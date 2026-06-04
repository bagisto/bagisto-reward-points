import { test } from "../../fixtures/AdminFixtures";
import { RewardSystemDetailsPage } from "../../pages/RewardSystemDetailsPage";

test.describe("Reward System Details", () => {
    test("Reward system details section is visible", async ({ adminPage }) => {
        const systemDetails = new RewardSystemDetailsPage(adminPage);

        await systemDetails.expectDetailsSectionVisible();
    });
});
