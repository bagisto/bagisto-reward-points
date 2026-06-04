<?php

namespace Webkul\Rewards\Repositories;

use Webkul\Core\Eloquent\Repository;
use Webkul\Rewards\Contracts\RedemptionSetting;

class RedemptionSettingRepository extends Repository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return RedemptionSetting::class;
    }

    /**
     * Get redemption setting
     *
     * @return Webkul\Rewards\Contracts\RedemptionSetting
     */
    public function getData()
    {
        return $this->model->latest()->first();
    }
}
