<?php

namespace Webkul\Rewards\Models;

use Illuminate\Database\Eloquent\Model;
use Webkul\Rewards\Contracts\CategorySpecificTimeReward as CategorySpecificTimeRewardContract;

class CategorySpecificTimeReward extends Model implements CategorySpecificTimeRewardContract
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
