<?php

namespace Webkul\Rewards\Listeners;

use Illuminate\Support\Facades\Mail;
use Webkul\Rewards\Mail\RewardDOB;
use Webkul\Rewards\Mail\RewardApproved;
use Webkul\Rewards\Mail\RewardClosed;
use Webkul\Rewards\Mail\RewardExpire;
use Webkul\Rewards\Mail\RewardFraud;
use Webkul\Rewards\Mail\RewardPending;
use Webkul\Rewards\Mail\RewardProcessing;
use Webkul\Rewards\Mail\RewardUsed;
use Webkul\Rewards\Mail\RewardRegister;
use Webkul\Rewards\Mail\RewardReview;
use Webkul\Customer\Models\Customer;
use Webkul\Rewards\Models\RewardPoint;
use Webkul\Rewards\Mail\RewardCancel;
use Webkul\Rewards\Models\RewardConfig;

class Rewards
{
    /**
     * Send Reward Mail to the customer
     *
     * @param object  $rewards
     * @return void
     */
    public function sendRewardMail($rewards)
    {

        $config = RewardConfig::where('code', 'email_notification')->pluck('value')->first();

        try {

            $customer = '';

            if ($config) {
                $customer = Customer::find($rewards->customer_id);
            }

            if ($customer) {
                $data = [
                    'email' => $customer->email,
                    'name' => $customer->first_name . " " . $customer->last_name,
                    'order_id' => $rewards->order_id,
                    'points' => $rewards->reward_points,
                    'status'  => $rewards->status,
                    'note' => $rewards->note,
                    'date' => $rewards->updated_at,
                    'used_reward_points' => RewardPoint::where('customer_id', $customer->id)->where('status', 'used')->sum('reward_points'),
                    'total_reward_points' => RewardPoint::where('customer_id', $customer->id)->where('status', 'approved')->sum('reward_points'),
                ];

                if ($rewards->status == 'pending') {

                    Mail::queue(new RewardPending($data));
                } elseif ($rewards->status == 'processing') {

                    Mail::queue(new RewardProcessing($data));
                } elseif ($rewards->status == 'approved') {

                    Mail::queue(new RewardApproved($data));
                } elseif ($rewards->status == 'fraud') {

                    Mail::queue(new RewardClosed($data));
                } elseif ($rewards->status == 'used') {

                    Mail::queue(new RewardUsed($data));
                } elseif ($rewards->status == 'expire') {

                    Mail::queue(new RewardExpire($data));
                } elseif ($rewards->status == 'closed') {

                    Mail::queue(new RewardClosed($data));
                } elseif ($rewards->status == 'fraud') {

                    Mail::queue(new RewardFraud($data));
                } elseif ($rewards->status == 'canceled') {

                    Mail::queue(new RewardCancel($data));
                }
            }
        } catch (\Exception $e) {
            report($e);
        }
    }


    /**
     * Send Reward Mail to the customer
     *
     * @param object  $rewards
     * @return void
     */

    public function sendRewardDOBMail($rewards)
    {

        $config = RewardConfig::where('code', 'email_notification')->pluck('value')->first();

        try {
            if ($config) {
                $customer = Customer::find($rewards->customer_id);
            }

            if ($customer) {
                $data = [
                    'email' => $customer->email,
                    'name' => $customer->first_name . " " . $customer->last_name,
                    'points' => $rewards->reward_points,
                    'status'  => $rewards->satatus,
                    'used_reward_points' => RewardPoint::where('customer_id', $customer->id)->where('status', 'used')->sum('reward_points'),
                    'total_reward_points' => RewardPoint::where('customer_id', $customer->id)->where('status', 'approved')->sum('reward_points'),
                ];

                Mail::queue(new RewardDOB($data));
            }
        } catch (\Exception $e) {
            report($e);
        }
    }


    /**
     * Send Reward Mail to the customer
     *
     * @param object  $rewards
     * @return void
     */
    public function sendReviewMail($rewards)
    {

        $config = RewardConfig::where('code', 'email_notification')->pluck('value')->first();

        try {

            if ($config) {
                $customer = Customer::find($rewards->customer_id);
            }

            if ($customer) {
                $data = [
                    'email' => $customer->email,
                    'name' => $customer->first_name . " " . $customer->last_name,
                    'points' => $rewards->reward_points,
                    'status'  => $rewards->satatus,
                    'product_name' => $rewards->product_name,
                    'used_reward_points' => RewardPoint::where('customer_id', $customer->id)->where('status', 'used')->sum('reward_points'),
                    'total_reward_points' => RewardPoint::where('customer_id', $customer->id)->where('status', 'approved')->sum('reward_points'),
                ];

                Mail::queue(new RewardReview($data));
            }
        } catch (\Exception $e) {
            report($e);
        }
    }


    /**
     * Send Reward Mail to the customer
     *
     * @param object  $rewards
     * @return void
     */
    public function sendRegisterMail($rewards)
    {

        $config = RewardConfig::where('code', 'email_notification')->pluck('value')->first();

        try {

            if ($config) {
                $customer = Customer::find($rewards->customer_id);
            }
            
            if ($customer) {
                $data = [
                    'email' => $customer->email,
                    'name' => $customer->first_name . " " . $customer->last_name,
                    'points' => $rewards->reward_points,
                    'status'  => $rewards->satatus,
                    'used_reward_points' => RewardPoint::where('customer_id', $customer->id)->where('status', 'used')->sum('reward_points'),
                    'total_reward_points' => RewardPoint::where('customer_id', $customer->id)->where('status', 'approved')->sum('reward_points'),
                ];

                Mail::queue(new RewardRegister($data));
            }
        } catch (\Exception $e) {
            report($e);
        }
    }
}
