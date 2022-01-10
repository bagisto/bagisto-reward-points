<?php

namespace Webkul\Rewards\Helpers;


use Webkul\Rewards\Repositories\ProductRewardRepository;
use Webkul\Customer\Repositories\CustomerRepository;
use Webkul\Rewards\Repositories\ProductSpecificTimeRewardRepository;
use Webkul\Rewards\Repositories\AttributeRewardRepository;
use Webkul\Rewards\Repositories\CartRewardRepository;
use Webkul\Rewards\Repositories\CategoryRewardRepository;
use Webkul\Rewards\Repositories\CategorySpecificTimeRewardRepository;
use Webkul\Product\Repositories\ProductFlatRepository;
use Webkul\Product\Repositories\ProductRepository;
use Webkul\Category\Repositories\CategoryRepository;
use Webkul\Attribute\Repositories\AttributeRepository;
use Webkul\Sales\Repositories\OrderItemRepository;
use Webkul\Rewards\Repositories\RewardConfigRepository;
use Webkul\Rewards\Repositories\RedemptionSettingResponsitory;
use Webkul\Rewards\Models\RewardPoint;


class CartHelper
{

    /**
     * ProductRewardRepository object
     *
     * @var Webkul\Rewards\Repositories\ProductRewardRepository
     */

    protected $productRewardRepository;


    /**
     * CustomerRepository object
     *
     * @var Webkul\Customer\Repositories\CustomerRepository
     */

    protected $customerRepository;


    /**
     * ProductSpecificTimeRewardRepository object
     *
     * @var Webkul\Rewards\Repositories\ProductSpecificTimeRewardRepository
     */

    protected $productSpecificTimeRewardRepository;

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
     * CategoryRepository object
     *
     * @var Webkul\Category\Repositories\CategoryRepository
     */

    protected $categoryRepository;

    /**
     * ProductRepository object
     *
     * @var Webkul\Product\Repositories\ProductRepository
     */

    protected $productRepository;

    /**
     * AttributeRepository object
     *
     * @var Webkul\Attribute\Repositories\AttributeRepository
     */

    protected $attributeRepository;

    /**
     * ProductFlatRepository object
     *
     * @var Webkul\Product\Repositories\ProductFlatRepository
     */

    protected $productFlatRepository;


    /**
     * AttributeRewardRepository object
     *
     * @var Webkul\Rewards\Repositories\AttributeRewardRepository
     */

    protected $attributeRewardRepository;

    /**
     * CartRewardRepository object
     *
     * @var Webkul\Rewards\Repositories\CartRewardRepository
     */

    protected $cartRewardRepository;

    /**
     * CategoryRewardRepository object
     *
     * @var Webkul\Rewards\Repositories\CategoryRewardRepository
     */

    protected $categoryRewardRepository;

    /**
     * CategorySpecificTimeRewardRepository object
     *
     * @var Webkul\Rewards\Repositories\CategorySpecificTimeRewardRepository
     */

    protected $categorySpecificTimeRewardRepository;

    /**
     * RedemptionSettingResponsitory object
     *
     * @var  Webkul\Rewards\Repositories\RedemptionSettingResponsitory
     */

    protected $redemptionSettingResponsitory;

    /**
     * Create a new repository instance.
     * @param  Webkul\Rewards\Repositories\ProductRewardRepository $productRewardRepository
     * @param  Webkul\Customer\Repositories\CustomerRepository $customerRepository
     * @param  Webkul\Rewards\Repositories\ProductSpecificTimeRewardRepository $ProductSpecificTimeRewardRepository
     * @param  Webkul\Rewards\Repositories\AttributeRewardRepository $attributeRewardRepository
     * @param  Webkul\Rewards\Repositories\CartRewardRepository $cartRewardRepository
     * @param  Webkul\Rewards\Repositories\CategoryRewardRepository $categoryRewardRepository
     * @param  Webkul\Rewards\Repositories\CategorySpecificTimeRewardRepository $categorySpecificTimeRewardRepository
     * @param  Webkul\Product\Repositories\ProductFlatRepository $productFlatRepository
     * @param  Webkul\Product\Repositories\ProductRepository  $productRepository
     * @param  Webkul\Category\Repositories\CategoryRepository $categoryRepository
     * @param  Webkul\Attribute\Repositories\AttributeRepository $attributeRepository
     * @param  Webkul\Sales\Repositories\OrderItemRepository $orderItemRepository
     * @param  Webkul\Rewards\Repositories\RewardConfigRepository $rewardConfigRepository
     * @param  Webkul\Rewards\Repositories\RedemptionSettingResponsitory $redemptionSettingResponsitory
     * @param  \Illuminate\Container\Container  $app
     * @return void
     */

    public function __construct(
        ProductRewardRepository $productRewardRepository,
        ProductSpecificTimeRewardRepository $productSpecificTimeRewardRepository,
        AttributeRewardRepository $attributeRewardRepository,
        CartRewardRepository $cartRewardRepository,
        CategoryRewardRepository $categoryRewardRepository,
        CategorySpecificTimeRewardRepository $categorySpecificTimeRewardRepository,
        CustomerRepository $customerRepository,
        ProductFlatRepository $productFlatRepository,
        AttributeRepository $attributeRepository,
        ProductRepository  $productRepository,
        CategoryRepository $categoryRepository,
        OrderItemRepository $orderItemRepository,
        RewardConfigRepository $rewardConfigRepository,
        RedemptionSettingResponsitory $redemptionSettingResponsitory
    ) {
        $this->productRewardRepository = $productRewardRepository;
        $this->productSpecificTimeRewardRepository = $productSpecificTimeRewardRepository;
        $this->attributeRewardRepository = $attributeRewardRepository;
        $this->cartRewardRepository = $cartRewardRepository;
        $this->categoryRewardRepository = $categoryRewardRepository;
        $this->categorySpecificTimeRewardRepository = $categorySpecificTimeRewardRepository;
        $this->customerRepository = $customerRepository;
        $this->productFlatRepository = $productFlatRepository;
        $this->attributeRepository = $attributeRepository;
        $this->productRepository = $productRepository;
        $this->categoryRepository = $categoryRepository;
        $this->orderItemRepository = $orderItemRepository;
        $this->rewardConfigRepository = $rewardConfigRepository;
        $this->redemptionSettingResponsitory = $redemptionSettingResponsitory;
    }



    /**
     * @param  array  $data
     * @return $reward_point
     */

    public function getRewardsForCart($data)
    {

        $reward_points = 0;
        $prod_rewards = [];
        $cat_rewards = [];
        $attr_reward = [];
        $cart_reward = [];

      
        foreach ($data->items as $keys => $item) {

            $order_id = $item['id'];
            $prod_reward = $this->getProductRewards($item->additional['product_id'], $order_id, $data['customer_id'], $item->additional['quantity']);
           
            if(!in_array($prod_reward,$prod_rewards) && !empty($prod_reward)){
                array_push($prod_rewards,$prod_reward);
            }
            $cat_reward = $this->getCategoryRewards($item->additional['product_id'], $order_id, $data['customer_id']);
            if(!in_array($cat_reward,$cat_rewards) && !empty($cat_reward)){
                array_push($cat_rewards,$cat_reward);
            }
            $attr_reward = $this->getAttributeRewards($item->additional['product_id'], $order_id, $data['customer_id']);

        }



        $cart_reward = $this->getCartRewards($data);

      
        if ($prod_rewards) {
        
            foreach($prod_rewards as $prod) {

                $check = $this->checkData($prod, 'product');


                if( empty($check) ) {
                    $reward_points += intVal($prod['reward_points']);
                }
            }
        }

      
                    
            
        if ($cat_rewards) {

            dd($cart_reward);

            foreach($cat_rewards as $cat) {

                $check = $this->checkData($cat, 'category');

                if( empty($check) ) {
                    $reward_points += intVal($cat['reward_points']);
                }

            }
            
        }

        if ($cart_reward) {

            $check = $this->checkData($cart_reward, 'cart');

            if( empty($check) ) {
                $reward_points += intVal($cart_reward['reward_points']);
            }
          
        }      

        if ($attr_reward) {

            foreach ($attr_reward as $key => $value) {

                $check = $this->checkData($value, 'cart');

                if( empty($check) ) {

                    $reward_points += intVal($value['reward_points']);
                }
            }
        }

        return intVal($reward_points);
    }


    
    /**
     * @param  $product_id
     * @param  $order_id
     * @param  $customer_id
     * @param  $quantity
     * @return  array $array
     */

    public function getProductRewards($product_id, $order_id, $customer_id, $quantity)
    {
        $reward_point = 0;
        $reward_end_date = '';
        $products = $this->productRepository->where('id', $product_id)->first();
        $product = $products->product_flats;
        $product_name = '';

        if ($rewards = $this->productSpecificTimeRewardRepository->findByProductId($product_id)) {
            $reward_point += $rewards->reward_points;
            $reward_end_date = $rewards->end_time;
            $product_name = $product[0]['name'];
        } elseif ($rewards = $this->productRewardRepository->findByProductId($product_id)) {
           
            $reward_point += intVal($rewards->reward_points);
            $product_name = $product[0]['name'];
        }

        $reward_point *= intVal($quantity);

        if($reward_point){
            return [
                'name' => $product_name,
                'order_id' => intVal($order_id),
                'customer_id' => $customer_id,
                "category_id" => null,
                "attribute_id" => null,
                "product_id" => $product_id,
                'reward_points' => $reward_point,
                'end_date' => $reward_end_date,
                'status' => 'pending',
                'note' => 'The point is given for the product ( '.$product_name.' ) purchased in Order No : ' . $order_id,
            ];
        }


        return [];
    }

    
    /**
     * @param  $product_id
     * @param  $order_id
     * @param  $customer_id
     * @return  array $array
     */
    public function getCategoryRewards($product_id, $order_id, $customer_id)
    {
        $rewardpoint = 0;
        $category_name = '';
        $reward_end_date = null;
        $category_id = 0;

        $products = $this->productRepository->where('id', $product_id)->first();
        $categories = $products->categories;

        foreach ($categories as $cat) {
            $category = $this->categoryRepository->find($cat->id);
            $category_name = $category->translations[0]->name;
            $category_id = $cat->id;

            if ($rewards = $this->categorySpecificTimeRewardRepository->findByCategoryId($cat->id)) {
                $rewardpoint += $rewards->reward_points;
                $reward_end_date = $rewards->end_time;
            } elseif ($rewards = $this->categoryRewardRepository->findByCategoryId($cat->id)) {
                $rewardpoint += $rewards->reward_points;
            }
        }


        if($rewardpoint){
            return [
                "order_id" => $order_id,
                "customer_id" => $customer_id,
                "category_id" => $category_id,
                "attribute_id" => null,
                "product_id" => $product_id,
                "reward_points" => $rewardpoint ? $rewardpoint : 0,
                "note" => "The point is given for the product Category(" . $category_name . ") in Order No : " . $order_id,
                "status" => 'pending',
                "end_date" => $reward_end_date ? $reward_end_date : NULL
            ];
        }


        return [];
        
    }


    /**
     * @param  $product_id
     * @param  $order_id
     * @param  $customer_id
     * @return  array $rewardPointArray
     */
    public function getAttributeRewards($product_id, $order_id, $customer_id)
    {
        $rewardpoint = 0;

        $rewardPointArray = [];

        $products = $this->productFlatRepository->where('product_id', $product_id)->where('status', 1)->first();

        $atributeRewards = $this->attributeRewardRepository->where('status',1)->get();

        foreach($atributeRewards as $att) {
            $attribute  = $this->attributeRepository->find($att->attribute_id);

            if($products->product->getAttribute($attribute->code)) {

                $rewardpoint += intVal($att->reward_points); 

                if ($rewardpoint) {
                    $resultantArray = [
                        "order_id" => $order_id,
                        "customer_id" => $customer_id,
                        "category_id" => null,
                        "attribute_id" => $attribute->id,
                        "product_id" => $product_id,
                        "reward_points" => $rewardpoint ? $rewardpoint : 0,
                        "note" => "The point is given for the product Attribute(" . $attribute->code . ") in Order No : " . $order_id,
                        "status" => 'pending',
                        "end_date" => null
                    ];

                    array_push($rewardPointArray, $resultantArray);
                }
            }
        }

        if($rewardpoint){
            return $rewardPointArray;
        }

        return [];
    }


     /**
     * @param  array  $data
     * @return array $rewardPoint
     */

    public function getCartRewards($data)
    {
        $amount = floatVal($data['grand_total']);

        $rewardpoint = $this->cartRewardRepository->findCartByAmount($amount);

        $rewardPoint = [];

        if ($rewardpoint) {

            $rewardPoint = [
                "order_id" => $data['id'],
                "customer_id" => $data['customer_id'],
                "category_id" => null,
                "attribute_id" => null,
                "product_id" => null,
                "reward_points" => $rewardpoint ? intVal($rewardpoint->reward_points) : 0,
                "note" => "The point is given for in Cart No : " . $data['cart_id'],
                "status" => 'pending',
                "end_date" => null
            ];
        }

        return $rewardPoint;
    }


     /**
     * @param  int  $points
     * @return array $rewardPoint
     */

    public function redemption($points){

        $redemption = $this->redemptionSettingResponsitory->getData();
        if($redemption && $redemption->redemp_over_subtotal){
            return ($points * $redemption->conversion_rate) / $redemption->points; 
        }
        
        return '';
    }

    public function checkData($data , $flag) {

        if ( $flag == 'product') {
            
            return RewardPoint::where('product_id',$data['product_id'])
                 ->where('customer_id',$data['customer_id'])
                ->where('product_purchased',1)
                ->first();
            
        }  elseif ( $flag == 'category') {

            return RewardPoint::where('category_id',$data['category_id'])
                ->where('customer_id',$data['customer_id'])
                ->where('product_category',1)
                ->first();
            
        } elseif ( $flag == 'attribute') {

            return RewardPoint::where('attribute_id', $data['attribute_id'])
                ->where('customer_id',$data['customer_id'])
                ->where('product_attribute',1)
                ->first();
            
        } elseif ( $flag == 'cart' ) {

            if( isset($data['order_id'])) {
                return RewardPoint::where('order_id', $data['order_id'])
                ->where('customer_id',$data['customer_id'])
                ->where('order_cart',1)
                ->first();
            }
            
        } 

    }

}





