<?php

namespace Webkul\Rewards\Providers;

use Konekt\Concord\BaseModuleServiceProvider;

class ModuleServiceProvider extends BaseModuleServiceProvider
{
    protected $models = [
        \Webkul\Rewards\Models\ProductReward::class,
        \Webkul\Rewards\Models\ProductSpecificTimeReward::class,
        \Webkul\Rewards\Models\CategoryReward::class,
        \Webkul\Rewards\Models\CategorySpecificTimeReward::class,
        \Webkul\Rewards\Models\CartReward::class,
        \Webkul\Rewards\Models\AttributeReward::class,
        \Webkul\Rewards\Models\RewardPoint::class,
        \Webkul\Rewards\Models\RewardConfig::class,
        \Webkul\Rewards\Models\RedemptionSetting::class,
    ];
}
