<?php

namespace Webkul\Rewards\Listeners;

use Carbon\Carbon;
use Webkul\Product\Repositories\ProductReviewRepository;
use Webkul\Rewards\Repositories\RewardPointRepository;

class Customer
{
    /**
     * Create a new Listener instance.
     *
     * @return void
     */
    public function __construct(
        protected RewardPointRepository $rewardPointRepository,
        protected ProductReviewRepository $productReviewRepository,
    ) {}

    /**
     * Reward point on customer register
     *
     * @param  object  $customer
     * @return void
     */
    public function register($customer)
    {
        if (core()->getConfigData('reward.general.general.module-status')) {
            $this->rewardPointRepository->setRewardPointOnRegister($customer);
        }
    }

    /**
     * Update review status
     *
     * @param  int  $reviewId
     * @return void
     */
    public function updateReview($review)
    {
        if (core()->getConfigData('reward.general.general.module-status')) {
            $productReview = $this->productReviewRepository->where([
                'id' => $review->id,
            ])->first();

            $reviewRewards = $this->rewardPointRepository->where([
                'product_reviewed' => '1',
                'product_id' => $productReview->product_id,
            ])->get();

            foreach ($reviewRewards as $reviewReward) {
                $reviewReward->status = $productReview->status;

                $reviewReward->exp_date = core()->getConfigData('reward.general.general.reward-used-at-one-time') ? Carbon::now()->addDays(core()->getConfigData('reward.general.general.reward-used-at-one-time'))->format('Y-m-d') : null;

                $reviewReward->save();
            }
        }
    }
}
