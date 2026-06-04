<?php

namespace Webkul\Rewards\Models;

use Webkul\Customer\Models\Customer as BaseCustomer;

class Customer extends BaseCustomer
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'gender',
        'date_of_birth',
        'email',
        'phone',
        'password',
        'api_token',
        'token',
        'customer_group_id',
        'subscribed_to_news_letter',
        'status',
        'is_verified',
        'is_suspended',
        'notes',
        'total_reward_points',
    ];
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($customer) {
            if (empty($customer->channel_id)) {
                $customer->channel_id = core()->getCurrentChannel()->id ?? 1;
            }
        });

        static::updating(function ($customer) {
            if (empty($customer->channel_id)) {
                $customer->channel_id = core()->getCurrentChannel()->id ?? 1;
            }
        });
    }
}
