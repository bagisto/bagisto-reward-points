<?php

namespace Webkul\Rewards\Repositories;

use Webkul\Core\Eloquent\Repository;
use Webkul\Rewards\Contracts\CategoryReward;

class CategoryRewardRepository extends Repository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return CategoryReward::class;
    }

    /**
     * Create record
     *
     * @return CategoryReward
     */
    public function create(array $data)
    {
        $create = [
            'reward_points' => $data['reward_points'],
            'status' => $data['status'],
            'category_id' => $data['category_id'],
        ];

        $check = $this->checkCategoryReward($data['category_id']);

        if ($check) {
            $this->model->whereId($check)->update($create);
        } else {
            $this->model->create($create);
        }
    }

    /**
     * Check category reward
     *
     * @return CategoryReward
     */
    public function checkCategoryReward($categoryId)
    {
        return $this->model->where('category_id', intval($categoryId))->pluck('id')->first();
    }

    /**
     * Find category by id
     *
     * @param  $category_id
     * @return CategoryReward
     */
    public function findByCategoryId($categoryId)
    {
        return $this->model->where('category_id', intval($categoryId))->where('status', 1)->first();
    }
}
