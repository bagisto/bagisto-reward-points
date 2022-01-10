<?php

namespace Webkul\Rewards\Repositories;

use Illuminate\Container\Container as App;

use Webkul\Core\Eloquent\Repository;
use Carbon\Carbon;

class ProductSpecificTimeRewardRepository extends Repository
{


    /**
     * Create a new repository instance.
     *
     * @param  \Webkul\Attribute\Repositories\AttributeRepository  $attributeRepository
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
        return 'Webkul\Rewards\Contracts\ProductSpecificTimeReward';
    }


    /**
     * @param  array  $data
     * @return bool
     */
    public function create(array $data)
    {

        $datum = [
            "reward_points" => $data['reward_points'],
            "status" => $data['status'],
            "start_time" => $data['start_time'],
            "end_time" => $data['end_time'],
            "product_id" => $data['product_id']
        ];

        $check = $this->checkProductReward($data['product_id']);

        if ($check) {
            $this->model->whereId($check)->update($datum);
        } else {
            $this->model->create($datum);
        }

        return true;
    }

    /**
     * @param  array  $data
     * @param integer $id
     * @return bool
     */
    public function update(array $data, $id)
    {
        $datum = [
            "reward_points" => $data['reward_points'],
            "status" => $data['status'],
            "start_time" => $data['start_time'],
            "end_time" => $data['end_time'],
            "product_id" => $data['product_id']
        ];

        $this->model->whereId($id)->update($datum);

        return true;
    }



    /**
     * @param  $productid
     * @return \Webkul\Rewards\Contracts\ProductSpecificTimeReward
     */
    private function checkProductReward($productId)
    {
        return $this->model->where('product_id', intVal($productId))->pluck('id')->first();
    }


    /**
     * @param  $product_id
     * @return \Webkul\Rewards\Contracts\ProductSpecificTimeReward
     */
    public function findByProductId($product_id)
    {
        $rewards =  $this->model->where('product_id', intVal($product_id))->first();

        if ($rewards && Carbon::parse($rewards->end_time)->gte(Carbon::now())) {

            return $rewards;
        }
    }

    /**
     * @param  $product_id
     * @return \Webkul\Rewards\Contracts\ProductSpecificTimeReward
     */
    public function getEndDateByProductId($product_id)
    {
        return $this->model->where('product_id', intVal($product_id))->pluck('end_time')->first();
    }

    public function edit($id)
    {
        return $this->model->where('product_id', intVal($id))->first();
    }
}
