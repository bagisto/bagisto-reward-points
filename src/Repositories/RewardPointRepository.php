<?php

namespace Webkul\Rewards\Repositories;

use Illuminate\Container\Container as App;

use Webkul\Core\Eloquent\Repository;
use Webkul\Sales\Repositories\OrderItemRepository;
use Webkul\Rewards\Repositories\RewardConfigRepository;
use Webkul\Rewards\Helpers\ModuleHelper as RewardModuleHelper;
use Webkul\Rewards\Helpers\CustomerRegisterHelper;
use Webkul\Rewards\Helpers\CartHelper;
use Event;
use Webkul\Product\Repositories\ProductRepository;


class RewardPointRepository extends Repository
{

    /**
     * CartHelper object
     *
     * @var Webkul\Rewards\Helpers\CartHelper
     */

    protected $cartHelper;

    /**
     * ProductRepository object
     *
     * @var Webkul\Product\Repositories\ProductRepository
     */

    protected $productRepository;


    /**
     * RewardConfigRepository object
     *
     * @var Webkul\Rewards\Repositories\RewardConfigRepository
     */

    protected $rewardConfigRepository;

    /**
     * OrderItemRepository object
     *
     * @var Webkul\Sales\Repositories\OrderItemRepository
     */

    protected $orderItemRepository;


   /**
     * Webkul\Rewards\Helpers\ModuleHelper as RewardModuleHelper object
     *
     * @var Webkul\Rewards\Helpers\ModuleHelper as RewardModuleHelper
     */

    protected $rewardModuleHelper;

    /**
     * CustomerRegisterHelper object
     *
     * @var Webkul\Rewards\Helpers\CustomerRegisterHelper 
     */

    protected $customerRegisterHelper;

    /**
     * Create a new repository instance.
     * @param  Webkul\Sales\Repositories\OrderItemRepository $orderItemRepository
     * @param  Webkul\Rewards\Repositories\RewardConfigRepository $rewardConfigRepository
     * @param  Webkul\Rewards\Helpers\ModuleHelper as RewardModuleHelper $moduleHelper
     * @param Webkul\Rewards\Helpers\CustomerRegisterHelper $customerRegisterHelper
     * @return void
     */

    public function __construct(
        OrderItemRepository $orderItemRepository,
        RewardConfigRepository $rewardConfigRepository,
        RewardModuleHelper $rewardModuleHelper,
        CustomerRegisterHelper $customerRegisterHelper,
        CartHelper $cartHelper,
        ProductRepository $productRepository,
        App $app
    ) {
        $this->orderItemRepository = $orderItemRepository;
        $this->rewardConfigRepository = $rewardConfigRepository;
        $this->rewardModuleHelper = $rewardModuleHelper;
        $this->customerRegisterHelper = $customerRegisterHelper;
        $this->cartHelper = $cartHelper;
        $this->productRepository = $productRepository;
        parent::__construct($app);
    }

    /**
     * Specify Model class name
     *
     * @return string
     */
    function model()
    {
        return 'Webkul\Rewards\Contracts\RewardPoint';
    }


    /**
     * @param  array  $data
     * @return bool
     */
    public function create($data)
    {
        if ($this->rewardModuleHelper->checkModuleStatus()) {

            // $reward_points = 0;
            $prod_reward = [];
            $cat_reward = [];
            $attr_reward = [];
            $cart_reward = [];

            foreach ($data->items as $keys => $item) {

                $order = $this->orderItemRepository->find($data['id']);
                $order_id = $item['id'];

                $prod_reward = $this->cartHelper->getProductRewards($order->additional['product_id'], $order_id, $data['customer_id'], $item->additional['quantity']);

                $cat_reward = $this->cartHelper->getCategoryRewards($order->additional['product_id'], $order_id, $data['customer_id']);

                $attr_reward = $this->cartHelper->getAttributeRewards($order->additional['product_id'], $order_id, $data['customer_id']);
            }

            $cart_reward = $this->cartHelper->getCartRewards($data);

        
            if($data->cart->points) {
               $this->usedRewardPoints($data);
            }
            
            
            if ($prod_reward) {

                $check = $this->checkData($prod_reward, 'product');

                if( empty($check) ) {
                    $this->insertRewardPoints($prod_reward,'product_purchased',1);
                }
                
            }

            if ($cat_reward) {

                $check = $this->checkData($cat_reward, 'category');

                if( empty($check) ) {
                    $this->insertRewardPoints($cat_reward,'product_category',1);
                }
               
            }

            if ($cart_reward) {
                $check = $this->checkData($cart_reward, 'cart');

                if( empty($check) ) {
                    $this->insertRewardPoints($cart_reward,'order_cart',1);
                }
             
            }

            if ($attr_reward) {

                foreach ($attr_reward as $key => $value) {

                    $check = $this->checkData($value, 'attribute');

                    if( empty($check) ) {
                        $this->insertRewardPoints($value,'product_attribute',1);
                    }
                    
                }
            }

            // return $reward_points;
        }
    }

    /**
     * @param array  $order
     * @param string $status
     * @return bool
     */
    public function updateStatus($order, $status)
    {
        if ($this->rewardModuleHelper->checkModuleStatus()) {
            $orders = $this->orderItemRepository->where('order_id', $order['id'])->get();
            $rewards = '';
            if ($status == 'completed') {
                foreach ($orders as $order) {
                    $rewards =   $this->model->where('order_id', $order->id)->get();
                    foreach($rewards as $reward){
                        $this->updateRewardStatus($reward,'approved');
                    }
                }
            } else {
                foreach ($orders as $order) {
                    $rewards =   $this->model->where('order_id', $order->id)->get();
                    foreach($rewards as $reward){
                        $this->updateRewardStatus($reward,$status);
                    }
                }
            }
            return true;
        }

        return false;
    }

    /**
     * @param array  $data
     * @return bool
     */

    public function addReviewReward($data)
    {
           
        if ($this->rewardModuleHelper->checkModuleStatus()) {
            $reward_points = $this->rewardConfigRepository->findByCode('customer_review');
            
            $expire_days = $this->rewardConfigRepository->findByCode('customer_review_exp_days');

            $current = \Carbon\Carbon::now();

            $check = $this->checkData($data , 'review');

            if(empty($check)) {
               $rewards = $this->model->create([
                    'order_id' => null,
                    'product_id' => intVal($data['product_id']),
                    'customer_id' => $data['customer_id'],
                    'reward_points' =>  $reward_points,
                    'note' => "The point is  given for the product review no product no " . $data['product_id'],
                    'status' => 'approved',
                    'exp_date' => $expire_days ? $current->addDays($expire_days) : null,
                    'product_reviewed' => 1
                ]);

                $products = $this->productRepository->where('id', $data['product_id'])->first();
                $product = $products->product_flats;

                $rewards->product_name = $product[0]['name'];

                Event::dispatch('reward.points.review.after', [$rewards]);
    
            }

           
            return true;
        }

        return false;
    }

    /**
     * @param integer  $id
     * @return integer $points
     */

    public function totalRewardPoints($id)
    {
     
        $totalRewardPoints = $this->model->where('customer_id', $id)->where('status','approved')->sum('reward_points');
        $userdRewardPoints = $this->model->where('customer_id', $id)->where('status','used')->sum('reward_points');

        return $totalRewardPoints - $userdRewardPoints;
    }


    /**
     * @param object  $customer
     * @return bool
     */


    public function setRewardPointOnRegister($customer)
    {
         $reward_points = $this->rewardConfigRepository->findByCode('customer_register');
         $expire_days = $this->rewardConfigRepository->findByCode('customer_register_exp_days');

         $check = $this->checkData($customer,'register');

         $current = \Carbon\Carbon::now();

        if ($reward_points && empty($check) ) {
         $rewards =     $this->model->create([
                'customer_id' => $customer->id,
                'reward_points' =>  $reward_points,
                'note' => "The Point is given when customer Register",
                'status' => 'approved',
                'exp_date' => $expire_days ? $current->addDays($expire_days) :null
            ]);

            Event::dispatch('reward.points.register.after', [$rewards]);
        }

        return true;
    }

    /**
     * @param array  $data
     * @return bool
     */

    public function insertRewardPoints($data,$key,$value)
    {
       
        if ($data) {
                $rewards=   $this->model->create([
                    'order_id' => $data['order_id'],
                    'customer_id' => $data['customer_id'],
                    "category_id" => $data['category_id'],
                    "attribute_id" => $data['attribute_id'],
                    "product_id" => $data['product_id'],
                    'reward_points' =>  $data['reward_points'],
                    'note' => $data['note'],
                    'status' => $data['status'] ? $data['status'] : 'pending',
                    'exp_date' => $data['end_date'] ? \Carbon\Carbon::parse($data['end_date'])->format('Y-m-d') : null,
                    $key => $value
                    ]);

                Event::dispatch('reward.points.save.after', [$rewards]);
        }
    }

     /**
     * @param array  $data
     * @return bool
     */

    public function usedRewardPoints($data){
        if($data) {
          $rewards =  $this->model->create([
                'order_id' => $data['cart_id'],
                'customer_id' => $data['customer_id'],
                'reward_points' =>  $data['points'],
                'note' => 'You have used '. $data['points'] . ' in Order No '. $data['cart_id'] ,
                'status' => 'used',
            ]);

            Event::dispatch('reward.points.save.after', [$rewards]);

            return true;
        }
    
        return false;
    }


    public function updateRewardStatus($data,$status){

        $data->status = $status;
        $data->save();

        Event::dispatch('reward.points.update.after', [$data]);
    }


    public function checkData($data , $flag) {

        if( $flag == 'register' ) {

        return $this->model->where('customer_id',$data->id)
                ->where('customer_registed',1)
                ->first();

        } elseif( $flag == 'review') {

         return $this->model->where('product_id',$data['product_id'])
                ->where('customer_id',$data['customer_id'])
                ->where('product_reviewed',1)
                ->first();

        } elseif ( $flag == 'product') {
            
            return $this->model->where('product_id',$data['product_id'])
                 ->where('customer_id',$data['customer_id'])
                ->where('product_purchased',1)
                ->first();
            
        }  elseif ( $flag == 'category') {

            return $this->model->where('category_id',$data['category_id'])
                ->where('customer_id',$data['customer_id'])
                ->where('product_category',1)
                ->first();
            
        } elseif ( $flag == 'attribute') {

            return $this->model->where('attribute_id',$data['attribute_id'])
                ->where('customer_id',$data['customer_id'])
                ->where('product_attribute',1)
                ->first();
            
        } elseif ( $flag == 'cart') {

            return $this->model->where('order_id',$data['order_id'])
                ->where('customer_id',$data['customer_id'])
                ->where('order_cart',1)
                ->first();
            
        } 

    }
}
