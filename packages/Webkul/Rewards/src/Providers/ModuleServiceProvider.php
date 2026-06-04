<?php

namespace Webkul\Rewards\Providers;

use Konekt\Concord\BaseModuleServiceProvider;
use Webkul\Rewards\Models\AttributeReward;
use Webkul\Rewards\Models\CartReward;
use Webkul\Rewards\Models\CategoryReward;
use Webkul\Rewards\Models\CategorySpecificTimeReward;
use Webkul\Rewards\Models\ProductReward;
use Webkul\Rewards\Models\ProductSpecificTimeReward;
use Webkul\Rewards\Models\RedemptionSetting;
use Webkul\Rewards\Models\RewardPoint;

class ModuleServiceProvider extends BaseModuleServiceProvider
{
    protected $models = [
        ProductReward::class,
        ProductSpecificTimeReward::class,
        CategoryReward::class,
        CategorySpecificTimeReward::class,
        CartReward::class,
        AttributeReward::class,
        RewardPoint::class,
        RedemptionSetting::class,
    ];
}
