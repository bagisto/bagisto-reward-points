<?php

namespace Webkul\Rewards\Repositories;

use Illuminate\Container\Container as App;

use Webkul\Core\Eloquent\Repository;

class CartRewardRepository extends Repository
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
        return 'Webkul\Rewards\Contracts\CartReward';
    }

    /**
     * @param  array  $data
     * @return \Webkul\Rewards\Contracts\CartReward
     */
    public function create(array $data)
    {
        return $this->model->create($data);
    }

    /**
     * @param  integer  $id
     * @return \Webkul\Rewards\Contracts\CartReward
     */

    public function edit($id)
    {
        return $this->model->find($id);
    }

    /**
     * @param  array  $data
     * @param  integer  $id
     * @return \Webkul\Rewards\Contracts\CartReward
     */

    public function update(array $data, $id)
    {
        $array = [
            "reward_points" => $data['reward_points'],
            "amount_from" => $data['amount_from'],
            "amount_to" => $data['amount_to'],
            "start_date" => $data['start_date'],
            "end_date" => $data['end_date'],
            "status" => $data['status']
        ];

        return $this->model->whereId($id)->update($array);
    }

    /**
     * @param  integer  $id
     * @return \Webkul\Rewards\Contracts\CartReward
     */

    public function delete($id)
    {
        return $this->model->whereId($id)->delete();
    }

    public function findCartByAmount($amount){
        return $this->model->where('amount_from', '<=', $amount)
        ->where('amount_to', '>=', $amount)->where('status', '1')->first();
    }
}
