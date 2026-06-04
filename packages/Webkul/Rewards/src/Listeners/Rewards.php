<?php

namespace Webkul\Rewards\Listeners;

use Illuminate\Support\Facades\Mail;
use Webkul\Customer\Models\Customer;
use Webkul\Rewards\Mail\RewardApproved;
use Webkul\Rewards\Mail\RewardCancel;
use Webkul\Rewards\Mail\RewardClosed;
use Webkul\Rewards\Mail\RewardDOB;
use Webkul\Rewards\Mail\RewardExpire;
use Webkul\Rewards\Mail\RewardFraud;
use Webkul\Rewards\Mail\RewardPending;
use Webkul\Rewards\Mail\RewardProcessing;
use Webkul\Rewards\Mail\RewardRegister;
use Webkul\Rewards\Mail\RewardReview;
use Webkul\Rewards\Mail\RewardUsed;
use Webkul\Rewards\Models\RewardPoint;

class Rewards
{
    /**
     * Send Reward Mail to the customer
     *
     * @param  object  $rewards
     * @return void
     */
    public function sendRewardMail($rewards)
    {
        try {
            $customer = '';

            if (core()->getConfigData('reward.general.general.email-notification')) {
                $customer = Customer::find($rewards->customer_id);
            }

            if ($customer) {
                $data = [
                    'email' => $customer->email,
                    'name' => $customer->first_name.' '.$customer->last_name,
                    'order_id' => $rewards->order_id,
                    'points' => $rewards->reward_points,
                    'status' => $rewards->status,
                    'note' => $rewards->note,
                    'date' => $rewards->updated_at,
                    'used_reward_points' => RewardPoint::where('customer_id', $customer->id)->where('status', 'used')->sum('reward_points'),
                    'total_reward_points' => RewardPoint::where('customer_id', $customer->id)->where('status', 'approved')->sum('reward_points'),
                ];

                switch ($rewards->status) {
                    case RewardPoint::STATUS_PENDING:
                        Mail::queue(new RewardPending($data));

                        break;

                    case RewardPoint::STATUS_PROCESSING:
                        Mail::queue(new RewardProcessing($data));

                        break;

                    case RewardPoint::STATUS_APPROVED:
                        Mail::queue(new RewardApproved($data));

                        break;

                    case RewardPoint::STATUS_FRAUD:
                        Mail::queue(new RewardClosed($data));

                        break;

                    case RewardPoint::STATUS_USED:
                        Mail::queue(new RewardUsed($data));

                        break;

                    case RewardPoint::STATUS_EXPIRE:
                        Mail::queue(new RewardExpire($data));

                        break;

                    case RewardPoint::STATUS_CLOSED:
                        Mail::queue(new RewardClosed($data));

                        break;

                    case RewardPoint::STATUS_FRAUD:
                        Mail::queue(new RewardFraud($data));

                        break;

                    case RewardPoint::STATUS_CANCELED:
                        Mail::queue(new RewardCancel($data));

                        break;
                }
            }
        } catch (\Exception $e) {
            report($e);
        }
    }

    /**
     * Send Reward Mail to the customer
     *
     * @param  object  $rewards
     * @return void
     */
    public function sendRewardDOBMail($rewards)
    {
        try {
            if (core()->getConfigData('reward.general.general.email-notification')) {
                $customer = Customer::find($rewards->customer_id);
            }

            if ($customer) {
                $data = [
                    'email' => $customer->email,
                    'name' => $customer->first_name.' '.$customer->last_name,
                    'points' => $rewards->reward_points,
                    'status' => $rewards->status,
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
     * @param  object  $rewards
     * @return void
     */
    public function sendReviewMail($rewards)
    {
        try {
            if (core()->getConfigData('reward.general.general.email-notification')) {
                $customer = Customer::find($rewards->customer_id);
            }

            if ($customer) {
                $data = [
                    'email' => $customer->email,
                    'name' => $customer->first_name.' '.$customer->last_name,
                    'points' => $rewards->reward_points,
                    'status' => $rewards->status,
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
     * @param  object  $rewards
     * @return void
     */
    public function sendRegisterMail($rewards)
    {
        try {
            if (core()->getConfigData('reward.general.general.email-notification')) {
                $customer = Customer::find($rewards->customer_id);
            }

            if ($customer) {
                $data = [
                    'email' => $customer->email,
                    'name' => $customer->first_name.' '.$customer->last_name,
                    'points' => $rewards->reward_points,
                    'status' => $rewards->status,
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
