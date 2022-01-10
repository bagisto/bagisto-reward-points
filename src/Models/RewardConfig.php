<?php

namespace Webkul\Rewards\Models;

use Illuminate\Database\Eloquent\Model;
use Webkul\Rewards\Contracts\RewardConfig as RewardConfigContract;

class RewardConfig extends Model implements RewardConfigContract
{
    protected $fillable = [
        'code',
        'value'
    ];

    protected $tables = "reward_configs";
}
