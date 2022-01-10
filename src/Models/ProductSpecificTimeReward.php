<?php

namespace  Webkul\Rewards\Models;

use Illuminate\Database\Eloquent\Model;
use Webkul\Rewards\Contracts\ProductSpecificTimeReward as ProductSpecificTimeRewardContract;

class ProductSpecificTimeReward extends Model implements ProductSpecificTimeRewardContract
{
    protected $fillable = [
        'product_id',
        'reward_points',
        'discount',
        'start_time',
        'end_time',
        'status'
    ];

    protected $tables = "product_specific_time_rewards";
}
