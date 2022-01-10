<?php

namespace Webkul\Rewards\Models;

use Illuminate\Database\Eloquent\Model;

use Webkul\Rewards\Contracts\RedemptionSetting as RedemptionSettingContract;

class RedemptionSetting extends Model implements RedemptionSettingContract
{
    protected $fillable = [
        'redemp_over_subtotal',
        'apply_points_checkout',
        'points',
        'conversion_rate',
    ];

    protected $tables = "redemption_settings";
}
