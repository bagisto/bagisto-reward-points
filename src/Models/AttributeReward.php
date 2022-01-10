<?php

namespace Webkul\Rewards\Models;

use Illuminate\Database\Eloquent\Model;

use Webkul\Rewards\Contracts\AttributeReward as AttributeRewardContract;

class AttributeReward extends Model implements AttributeRewardContract
{
    protected $fillable = [
        'attribute_id',
        'discount',
        'reward_points',
        'status'
    ];

    protected $tables = "attribute_rewards";
}
