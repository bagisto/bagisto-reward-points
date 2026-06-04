import { test } from "../../fixtures/AdminFixtures";
import { RewardCartPage } from "../../pages/RewardCartPage";

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

test.describe("Reward Point on Cart", () => {
    let reward = {
        rewardPoints: "75",
        amountFrom: "100",
        amountTo: "500",
        startDate: futureDateTime(1),
        endDate: futureDateTime(4),
    };

    test("Create cart reward using UI", async ({ adminPage }) => {
        const rewards = new RewardCartPage(adminPage);

        reward = await rewards.createRewardUsingUi(reward);

        await rewards.expectRewardVisible(reward);
    });

    test("Update cart reward status using UI", async ({ adminPage }) => {
        const rewards = new RewardCartPage(adminPage);

        reward = await rewards.updateRewardStatusUsingUi(reward, "Inactive");

        await rewards.expectRewardVisible(reward);
    });

    test("Delete cart reward using UI", async ({ adminPage }) => {
        const rewards = new RewardCartPage(adminPage);

        await rewards.deleteRewardUsingUi(reward);
    });
});
