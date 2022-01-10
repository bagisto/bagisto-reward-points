<?php

namespace Webkul\Rewards\Models;

use Illuminate\Database\Eloquent\Model;

use Webkul\Rewards\Contracts\ProductReward as ProductRewardContract;

class ProductReward extends Model implements ProductRewardContract
{
    protected $fillable = [
        'product_id',
        'reward_points',
        'discount',
        'start_time',
        'end_time',
        'status'
    ];

    protected $tables = "product_rewards";
}
