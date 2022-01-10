<?php

namespace Webkul\Rewards\Models;

use Illuminate\Database\Eloquent\Model;

use Webkul\Rewards\Contracts\CategoryReward as CategoryRewardContract;

class CategoryReward extends Model implements CategoryRewardContract
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
