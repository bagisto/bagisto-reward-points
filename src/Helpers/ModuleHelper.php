<?php

namespace Webkul\Rewards\Helpers;

use Webkul\Rewards\Models\RewardConfig;

class ModuleHelper
{

    /**
     * @return \Illuminate\Database\Eloquent\Builder 
     */
    public function checkModuleStatus()
    {
        return RewardConfig::where('code','module_status')->pluck('value')->first();
    
    }

}