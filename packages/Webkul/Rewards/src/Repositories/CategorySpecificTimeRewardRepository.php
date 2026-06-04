<?php

namespace Webkul\Rewards\Repositories;

use Carbon\Carbon;
use Webkul\Core\Eloquent\Repository;
use Webkul\Rewards\Contracts\CategorySpecificTimeReward;

class CategorySpecificTimeRewardRepository extends Repository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return CategorySpecificTimeReward::class;
    }

    /**
     * Create record
     *
     * @return CategorySpecificTimeReward
     */
    public function create(array $data)
    {
        $datum = [
            'reward_points' => $data['reward_points'],
            'status' => $data['status'],
            'start_time' => $data['start_time'],
            'end_time' => $data['end_time'],
            'category_id' => intval($data['category_id']),
        ];

        $check = $this->checkCategoryReward($data['category_id']);

        if ($check) {
            $this->model->whereId($check)->update($datum);
        } else {
            $this->model->create($datum);
        }

        return true;
    }

    /**
     * Check category reward
     *
     * @return CategorySpecificTimeReward
     */
    public function checkCategoryReward($categoryId)
    {
        return $this->model->where('category_id', intval($categoryId))->pluck('id')->first();
    }

    /**
     * Find category by id
     *
     * @param  $category_id
     * @return CategorySpecificTimeReward
     */
    public function findByCategoryId($categoryId)
    {
        $rewards = $this->model->where('category_id', intval($categoryId))->where('status', 1)->first();

        if (
            $rewards
            && Carbon::parse($rewards->start_time)->lte(Carbon::now())
            && Carbon::parse($rewards->end_time)->gte(Carbon::now())
        ) {

            return $rewards;
        }
    }
}
