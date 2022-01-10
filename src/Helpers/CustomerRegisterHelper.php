<?php

namespace Webkul\Rewards\Helpers;

use Webkul\Rewards\Models\RewardConfig;
use WEbkul\Rewards\Models\RewardPoint;

class CustomerRegisterHelper
{

    /**
     * @return \Illuminate\Database\Eloquent\Builder 
     */
    public function getCustomerRegisterRewardPoints()
    {
        return RewardConfig::where('code','customer_register')->pluck('value')->first();
    
    }


    /**
     * @return \Illuminate\Database\Eloquent\Builder 
     */
    public function getCustomerDobRewardPoints(){
        return RewardConfig::where('code','customer_dob')->pluck('value')->first();
    }

    
    /**
     * @return \Illuminate\Database\Eloquent\Builder 
     */
    public function getCustomerReviewRewardPoints(){
        return RewardConfig::where('code','customer_review')->pluck('value')->first();
    }

    /**
     * @return \Illuminate\Database\Eloquent\Builder 
     */
    public function getCustomerRegisterExpireDate(){
        return RewardConfig::where('code','customer_register_exp_days')->pluck('value')->first();
    }

    /**
     * @return \Illuminate\Database\Eloquent\Builder 
     */
    public function getCustomerDobExpireDate(){
        return RewardConfig::where('code','customer_dob_exp_days')->pluck('value')->first();
    }

    /**
     * @return \Illuminate\Database\Eloquent\Builder 
     */
    public function getCustomerDobReward($customer){

         $check =   RewardPoint::where('customer_id',$customer->id)
                ->where('customer_dob',1)
                ->first();
        if($check) {
            
            $currentYear = \Carbon\Carbon::now()->format('Y');
            
            $rewardYear =  \Carbon\Carbon::parse($check->created_at)->format('Y');

            if($currentYear == $rewardYear) {
                
                return true;

            }else {

                return false;

            }
            
        }

        return false;
    }



}