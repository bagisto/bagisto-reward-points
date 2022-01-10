<?php

namespace Webkul\Rewards\Repositories;

use Illuminate\Container\Container as App;
use Webkul\Core\Eloquent\Repository;

class AttributeRewardRepository extends Repository
{

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
        return 'Webkul\Rewards\Contracts\AttributeReward';
    }

    /**
     * @param  array  $data
     * @return \Webkul\Rewards\Contracts\AttributeReward
     */
    public function create(array $data)
    {

        return $this->model->create($data);
    }

    /**
     * @param  integer  $id
     * @return \Webkul\Rewards\Contracts\AttributeReward
     */

    public function edit($id)
    {
        return $this->model->find($id);
    }

    /**
     * @param  array  $data
     * @param  integer  $id
     * @return \Webkul\Rewards\Contracts\AttributeReward
     */

    public function update(array $data, $id)
    {

        $array = [
            "reward_points" => $data['reward_points'],
            "attribute_id" => $data['attribute_id'],
            "status" => $data['status']
        ];

        return $this->model->whereId($id)->update($array);
    }

    /**
     * @param  integer  $id
     * @return \Webkul\Rewards\Contracts\AttributeReward
     */

    public function delete($id)
    {
        return $this->model->whereId($id)->delete();
    }
}
