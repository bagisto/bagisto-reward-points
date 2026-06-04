<?php

namespace Webkul\Rewards\Repositories;

use Carbon\Carbon;
use Webkul\Core\Eloquent\Repository;
use Webkul\Rewards\Contracts\ProductSpecificTimeReward;

class ProductSpecificTimeRewardRepository extends Repository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return ProductSpecificTimeReward::class;
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
            'start_time' => $data['start_time'],
            'end_time' => $data['end_time'],
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
     * @return ProductSpecificTimeReward
     */
    private function checkProductReward($productId)
    {
        return $this->model->where('product_id', intval($productId))->pluck('id')->first();
    }

    /**
     * Find by product id
     *
     * @return ProductSpecificTimeReward
     */
    public function findByProductId($productId)
    {
        $rewards = $this->model->where('product_id', intval($productId))->where('status', 1)->first();

        if (
            $rewards
            && Carbon::parse($rewards->start_time)->lte(Carbon::now())
            && Carbon::parse($rewards->end_time)->gte(Carbon::now())
        ) {
            return $rewards;
        }
    }

    /**
     * Get end date by product id
     *
     * @return ProductSpecificTimeReward
     */
    public function getEndDateByProductId($productId)
    {
        return $this->model->where('product_id', intval($productId))->pluck('end_time')->first();
    }
}
