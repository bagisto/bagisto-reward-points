import { test } from "../../fixtures/AdminFixtures";
import { AdminCategoryPage } from "../../pages/AdminCategoryPage";
import { RewardCategoryPage } from "../../pages/RewardCategoryPage";
import { generateDescription, generateName, generateSlug } from "../../utils/faker";

test.describe.configure({ mode: "serial" });

test.describe("Reward Point on Category", () => {
    const rewardPoints = "35";
    const updatedRewardPoints = "55";
    const categoryName = `Reward ${generateName()}`;
    let createdReward: {
        categoryName: string;
        rewardPoints: string;
    };

    test("Create category reward using UI", async ({ adminPage }) => {
        const categories = new AdminCategoryPage(adminPage);
        const rewards = new RewardCategoryPage(adminPage);

        await categories.createCategoryUsingUi({
            name: categoryName,
            slug: generateSlug(),
            position: "1",
            description: generateDescription(120),
        });

        createdReward = await rewards.createRewardUsingUi(
            rewardPoints,
            categoryName,
        );

        await rewards.expectRewardVisible(
            createdReward.categoryName,
            createdReward.rewardPoints,
        );
    });

    test("Update category reward using UI", async ({ adminPage }) => {
        const rewards = new RewardCategoryPage(adminPage);
        const updatedReward = await rewards.updateRewardUsingUi(
            createdReward.categoryName,
            createdReward.rewardPoints,
            updatedRewardPoints,
        );

        await rewards.expectRewardVisible(
            updatedReward.categoryName,
            updatedReward.rewardPoints,
        );

        createdReward = updatedReward;
    });

    test("Delete category reward using UI", async ({ adminPage }) => {
        const rewards = new RewardCategoryPage(adminPage);

        await rewards.deleteRewardUsingUi(
            createdReward.categoryName,
            createdReward.rewardPoints,
        );
    });
});
