<?php

namespace Webkul\Rewards\Models;

use Illuminate\Database\Eloquent\Model;

use Webkul\Rewards\Contracts\CategorySpecificTimeReward as CategorySpecificTimeRewardContract;

class CategorySpecificTimeReward extends Model implements CategorySpecificTimeRewardContract
{
    protected $fillable = [
        'category_id',
        'reward_points',
        'discount',
        'start_time',
        'end_time',
        'status'
    ];

    protected $tables = "category_rewards";
}
