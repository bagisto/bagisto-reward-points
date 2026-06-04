<?php

namespace Webkul\Rewards\Helpers;

use Carbon\Carbon;
use Webkul\Rewards\Models\RewardPoint;

class CustomerRegisterHelper
{
    /**
     * Get customer register reward
     *
     * @return int
     */
    public function getCustomerRegisterRewardPoints()
    {
        return core()->getConfigData('reward.general.general.reward-when-customer-register');
    }

    /**
     * Get customer register expire date
     *
     * @return int
     */
    public function getCustomerRegisterExpireDate()
    {
        return core()->getConfigData('reward.general.general.reward-when-customer-register-exp-days');
    }

    /**
     * Get customer Dob reward points
     *
     * @return int
     */
    public function getCustomerDobRewardPoints()
    {
        return core()->getConfigData('reward.general.general.reward-when-customer-dob');
    }

    /**
     * Get customer dob expire date
     *
     * @return int
     */
    public function getCustomerDobExpireDate()
    {
        return core()->getConfigData('reward.general.general.reward-when-customer-dob-exp-days');
    }

    /**
     * Get customer review reward point
     *
     * @return int
     */
    public function getCustomerReviewRewardPoints()
    {
        return core()->getConfigData('reward.general.general.reward-when-product-reviewed');
    }

    /**
     * Get customer review expire date
     *
     * @return int
     */
    public function getCustomerReviewExpireDate()
    {
        return core()->getConfigData('reward.general.general.reward-when-product-reviewed-exp-days');
    }

    /**
     * Get customer dob reward
     *
     * @param  mixed  $customer
     * @return bool
     */
    public function getCustomerDobReward($customer)
    {
        $check = RewardPoint::where('customer_id', $customer->id)->where('customer_dob', 1)->first();

        if ($check) {
            $currentYear = Carbon::now()->format('Y');

            $rewardYear = Carbon::parse($check->created_at)->format('Y');

            if ($currentYear == $rewardYear) {
                return true;
            }
        }

        return false;
    }
}
