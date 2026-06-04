<?php

namespace Webkul\Rewards\Helpers;

use Carbon\Carbon;
use Webkul\Rewards\Repositories\ProductRewardRepository;
use Webkul\Rewards\Repositories\ProductSpecificTimeRewardRepository;

class ProductRewardHelper
{
    /**
     * @var int
     */
    public const ACTIVE = 1;

    /**
     * Create a new repository instance.
     *
     * @return void
     */
    public function __construct(
        protected ProductSpecificTimeRewardRepository $productSpecificTimeRewardRepository,
        protected ProductRewardRepository $productRewardRepository,
    ) {}

    /**
     * Create a new repository instance.
     *
     * @return Illuminate\Database\Eloquent\Builder
     */
    public function getProductRewardPoints($productId)
    {
        $productRewards = $this->productSpecificTimeRewardRepository->findOneWhere([
            'product_id' => $productId,
            'status' => self::ACTIVE,
        ]);

        if (
            $productRewards
            && Carbon::parse($productRewards->start_time)->lte(Carbon::now())
            && Carbon::parse($productRewards->end_time)->gte(Carbon::now())
        ) {
            return $productRewards;
        } else {
            return $this->productRewardRepository->findOneWhere([
                'product_id' => $productId,
                'status' => self::ACTIVE,
            ]);
        }
    }
}
