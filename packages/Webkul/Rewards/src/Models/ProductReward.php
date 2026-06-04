<?php

namespace Webkul\Rewards\Models;

use Illuminate\Database\Eloquent\Model;
use Webkul\Rewards\Contracts\ProductReward as ProductRewardContract;

class ProductReward extends Model implements ProductRewardContract
{
    /**
     * Table associated with the model.
     *
     * @var string
     */
    protected $tables = 'product_rewards';

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
