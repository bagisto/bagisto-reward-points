<?php

namespace Webkul\Rewards\Models;

use Illuminate\Database\Eloquent\Model;
use Webkul\Rewards\Contracts\RedemptionSetting as RedemptionSettingContract;

class RedemptionSetting extends Model implements RedemptionSettingContract
{
    /**
     * Table associated with the model.
     *
     * @var string
     */
    protected $tables = 'redemption_settings';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'redemp_over_subtotal',
        'apply_points_checkout',
        'points',
        'conversion_rate',
    ];
}
