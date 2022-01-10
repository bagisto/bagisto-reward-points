<?php

namespace Webkul\Rewards\Repositories;

use Illuminate\Container\Container as App;

use Webkul\Core\Eloquent\Repository;
use Carbon\Carbon;

class CategorySpecificTimeRewardRepository extends Repository
{
    /**
     * Create a new repository instance
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
        return 'Webkul\Rewards\Contracts\CategorySpecificTimeReward';
    }

    /**
     * @param  array  $data
     * @return \Webkul\Rewards\Contracts\CategorySpecificTimeReward
     */
    public function create(array $data)
    {
        $datum = [
            "reward_points" => $data['reward_points'],
            "status" => $data['status'],
            "start_time" => $data['start_time'],
            "end_time" => $data['end_time'],
            "category_id" => intVal($data['category_id'])
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
     * @param  $categoryId
     * @return \Webkul\Rewards\Contracts\CategorySpecificTimeReward
     */
    public function checkCategoryReward($categoryId)
    {
        return $this->model->where('category_id', intVal($categoryId))->pluck('id')->first();
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
            "category_id" => intVal($data['category_id'])
        ];

        $this->model->whereId($id)->update($datum);

        return true;
    }

     /**
     * @param  $categoryId
     * @return \Webkul\Rewards\Contracts\CategorySpecificTimeReward
     */
    public function edit($id){
        return $this->model->where('category_id', intVal($id))->first();     
    }

     /**
     * @param  $category_id
     * @return \Webkul\Rewards\Contracts\CategorySpecificTimeReward
     */
    public function findByCategoryId($category_id)
    {
        $rewards =  $this->model->where('category_id', intVal($category_id))->first();

        
        if ($rewards && Carbon::parse($rewards->end_time)->gte(Carbon::now())) {

            return $rewards;
        }
    }

}
