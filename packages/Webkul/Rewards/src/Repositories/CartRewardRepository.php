<?php

namespace Webkul\Rewards\Repositories;

use Webkul\Core\Eloquent\Repository;
use Webkul\Rewards\Contracts\CartReward;

class CartRewardRepository extends Repository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return CartReward::class;
    }

    /**
     * Find cart by amount
     *
     * @param  int  $amount
     * @return CartReward
     */
    public function findCartByAmount($amount)
    {
        return $this->model->where('amount_from', '<=', $amount)
            ->where('amount_to', '>=', $amount)
            ->where('status', '1')
            ->first();
    }
}
