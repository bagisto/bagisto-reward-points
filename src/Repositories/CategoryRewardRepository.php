<?php

namespace Webkul\Rewards\Repositories;

use Illuminate\Container\Container as App;

use Webkul\Core\Eloquent\Repository;

class CategoryRewardRepository extends Repository
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
        return 'Webkul\Rewards\Contracts\CategoryReward';
    }

    /**
     * @param  array  $data
     * @return \Webkul\Rewards\Contracts\CategoryReward
     */
    public function create(array $data)
    {
            $datum = [
                "reward_points" => $data['reward_points'],
                "status" => $data['status'],
                "category_id" => $data['category_id']
            ];
            $check = $this->checkCategoryReward($data['category_id']);
            if ($check) {
                $this->model->whereId($check)->update($datum);
            } else {
                $this->model->create($datum);
            }
    
    }

      /**
     * @param  array  $data
     * @param integer $id
     * @return bool
     */
    public function update(array $data,$id)
    {
        $datum = [
            "reward_points" => $data['reward_points'],
            "status" => $data['status'],
            "category_id" => $data['category_id']
        ];

        $this->model->whereId($id)->update($datum);
       
        return true;
    }


    /**
     * @param  $categoryId
     * @return \Webkul\Rewards\Contracts\CategoryReward
     */
    public function checkCategoryReward($categoryId)
    {
        return $this->model->where('category_id', intVal($categoryId))->pluck('id')->first();
    }

     /**
     * @param  $categoryId
     * @return \Webkul\Rewards\Contracts\CategoryReward
     */
    public function edit($id){
        return $this->model->where('category_id', intVal($id))->first();     
    }

    /**
     * @param  $category_id
     * @return \Webkul\Rewards\Contracts\CategoryReward
     */
    public function findByCategoryId($category_id)
    {
        return $this->model->where('category_id', intVal($category_id))->first();
    }
}
