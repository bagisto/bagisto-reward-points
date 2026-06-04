import { test } from "../../fixtures/AdminFixtures";
import { AdminCategoryPage } from "../../pages/AdminCategoryPage";
import { RewardCategorySpecificPage } from "../../pages/RewardCategorySpecificPage";
import { generateDescription, generateName, generateSlug } from "../../utils/faker";

test.describe.configure({ mode: "serial" });

function futureDateTime(daysFromNow: number): string {
    const date = new Date();

    date.setDate(date.getDate() + daysFromNow);
    date.setHours(10, 0, 0, 0);

    const pad = (value: number) => String(value).padStart(2, "0");

    return [
        date.getFullYear(),
        pad(date.getMonth() + 1),
        pad(date.getDate()),
    ].join("-")
        + ` ${pad(date.getHours())}:${pad(date.getMinutes())}:${pad(date.getSeconds())}`;
}

test.describe("Reward Point on Category For Specific Time", () => {
    const categoryName = `Specific Reward ${generateName()}`;
    const rewardPoints = "45";
    const updatedRewardPoints = "65";
    const startTime = futureDateTime(1);
    const endTime = futureDateTime(3);
    const updatedStartTime = futureDateTime(2);
    const updatedEndTime = futureDateTime(5);
    let reward: {
        categoryName: string;
        rewardPoints: string;
        startTime: string;
        endTime: string;
    };

    test("Create category specific time reward using UI", async ({ adminPage }) => {
        const categories = new AdminCategoryPage(adminPage);
        const rewards = new RewardCategorySpecificPage(adminPage);

        await categories.createCategoryUsingUi({
            name: categoryName,
            slug: generateSlug(),
            position: "1",
            description: generateDescription(120),
        });

        reward = await rewards.createRewardUsingUi(
            categoryName,
            rewardPoints,
            startTime,
            endTime,
        );

        await rewards.expectRewardVisible(reward);
    });

    test("Update category specific time reward using UI", async ({ adminPage }) => {
        const rewards = new RewardCategorySpecificPage(adminPage);

        reward = await rewards.updateRewardUsingUi(
            reward,
            updatedRewardPoints,
            updatedStartTime,
            updatedEndTime,
        );

        await rewards.expectRewardVisible(reward);
    });

    test("Delete category specific time reward using UI", async ({ adminPage }) => {
        const rewards = new RewardCategorySpecificPage(adminPage);

        await rewards.deleteRewardUsingUi(reward);
    });
});
