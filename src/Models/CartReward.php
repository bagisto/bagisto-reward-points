<?php

namespace Webkul\Rewards\Models;

use Illuminate\Database\Eloquent\Model;

use Webkul\Rewards\Contracts\CartReward as CartRewardContract;

class CartReward extends Model implements CartRewardContract
{
    protected $fillable = [
        'amount_from',
        'amount_to',
        'discount',
        'reward_points',
        'start_date',
        'end_date',
        'status'
    ];

    protected $tables = "cart_rewards";
}
