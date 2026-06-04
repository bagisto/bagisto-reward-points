<?php

namespace Webkul\Rewards\Repositories;

use Webkul\Core\Eloquent\Repository;
use Webkul\Rewards\Contracts\ProductReward;

class ProductRewardRepository extends Repository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return ProductReward::class;
    }

    /**
     * Create record
     *
     * @return bool
     */
    public function create(array $data)
    {
        $create = [
            'reward_points' => $data['reward_points'],
            'status' => $data['status'],
            'product_id' => $data['product_id'],
        ];

        $check = $this->checkProductReward($data['product_id']);

        if ($check) {
            $this->model->whereId($check)->update($create);
        } else {
            $this->model->create($create);
        }

        return true;
    }

    /**
     * Check product reward
     *
     * @return ProductReward
     */
    public function checkProductReward($productId)
    {
        return $this->model->where('product_id', intval($productId))->pluck('id')->first();
    }

    /**
     * Find category by id
     *
     * @return ProductReward
     */
    public function findByProductId($productId)
    {
        return $this->model->where('product_id', intval($productId))->where('status', 1)->first();
    }
}
