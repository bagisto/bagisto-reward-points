<?php

namespace Webkul\Rewards\Models;

use Illuminate\Database\Eloquent\Model;
use Webkul\Rewards\Contracts\ProductSpecificTimeReward as ProductSpecificTimeRewardContract;

class ProductSpecificTimeReward extends Model implements ProductSpecificTimeRewardContract
{
    /**
     * Table associated with the model.
     *
     * @var string
     */
    protected $tables = 'product_specific_time_rewards';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'product_id',
        'reward_points',
        'discount',
        'start_time',
        'end_time',
        'status',
    ];
}
