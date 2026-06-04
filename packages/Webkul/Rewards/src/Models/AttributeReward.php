<?php

namespace Webkul\Rewards\Models;

use Illuminate\Database\Eloquent\Model;
use Webkul\Rewards\Contracts\AttributeReward as AttributeRewardContract;

class AttributeReward extends Model implements AttributeRewardContract
{
    /**
     * Table associated with the model.
     *
     * @var string
     */
    protected $tables = 'attribute_rewards';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'attribute_id',
        'discount',
        'reward_points',
        'status',
    ];
}
