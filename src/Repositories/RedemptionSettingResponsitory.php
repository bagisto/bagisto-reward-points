<?php

namespace Webkul\Rewards\Repositories;

use Illuminate\Container\Container as App;

use Webkul\Core\Eloquent\Repository;

class RedemptionSettingResponsitory extends Repository
{


    /**
     * Create a new repository instance.
     * @param  \Illuminate\Container\Container  $app
     * @return void
     */
    public function __construct(App $app)
    {
        parent::__construct($app);
    }

    /**
     * Specify Model class name
     *
     * @return string
     */
    function model()
    {
        return 'Webkul\Rewards\Contracts\RedemptionSetting';
    }

    
    /**
     * @return boolean\Webkul\Rewards\Contracts\RedemptionSetting
    */
    public function getData()
    {
        return $this->model->latest()->first();
    }
}
