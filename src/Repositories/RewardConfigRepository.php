<?php

namespace Webkul\Rewards\Repositories;

use Illuminate\Container\Container as App;

use Webkul\Core\Eloquent\Repository;

class RewardConfigRepository extends Repository
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
        return 'Webkul\Rewards\Contracts\RewardConfig';
    }


    /**
     * @param  array  $data
     * @return true
     */
    public function create(array $data)
    {
        foreach ($data as $keys => $value) {
            if ($keys == '_token') {
                continue;
            }
            if ($d = $this->check($keys)) {
                $this->model->whereId($d->id)->update(['value' => $value]);
            } else {
                $this->model->create(['code' => $keys, 'value' => $value]);
            }
        }

        return true;
    }

    /**
     * @param  $productid
     * @return \Webkul\Rewards\Contracts\RewardConfig
     */
    private function check($keys)
    {
        return $this->model->where('code', $keys)->first();
    }

    /**
     * @param  $code
     * @return \Webkul\Rewards\Contracts\RewardConfig
     */
    public function findByCode($code)
    {
        return  $this->model->where('code', $code)->pluck('value')->first();
    }
}
