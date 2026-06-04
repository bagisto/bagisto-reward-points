<?php

namespace Webkul\Rewards\Models;

use Illuminate\Database\Eloquent\Model;
use Webkul\Rewards\Contracts\CategoryReward as CategoryRewardContract;

class CategoryReward extends Model implements CategoryRewardContract
{
    /**
     * Table associated with the model.
     *
     * @var string
     */
    protected $tables = 'category_rewards';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'category_id',
        'reward_points',
        'discount',
        'start_time',
        'end_time',
        'status',
    ];
}
