<?php

namespace Webkul\Rewards\Helpers;

use Illuminate\Database\Eloquent\Builder;
use Webkul\Attribute\Repositories\AttributeRepository;
use Webkul\Category\Repositories\CategoryRepository;
use Webkul\Customer\Repositories\CustomerRepository;
use Webkul\Product\Repositories\ProductFlatRepository;
use Webkul\Product\Repositories\ProductRepository;
use Webkul\Rewards\Models\RewardPoint;
use Webkul\Rewards\Repositories\AttributeRewardRepository;
use Webkul\Rewards\Repositories\CartRewardRepository;
use Webkul\Rewards\Repositories\CategoryRewardRepository;
use Webkul\Rewards\Repositories\CategorySpecificTimeRewardRepository;
use Webkul\Rewards\Repositories\ProductRewardRepository;
use Webkul\Rewards\Repositories\ProductSpecificTimeRewardRepository;
use Webkul\Rewards\Repositories\RedemptionSettingRepository;
use Webkul\Sales\Repositories\OrderItemRepository;

class CartHelper
{
    /**
     * Create a new repository instance.
     *
     * @return void
     */
    public function __construct(
        protected AttributeRepository $attributeRepository,
        protected AttributeRewardRepository $attributeRewardRepository,
        protected CartRewardRepository $cartRewardRepository,
        protected CategoryRepository $categoryRepository,
        protected CategoryRewardRepository $categoryRewardRepository,
        protected CategorySpecificTimeRewardRepository $categorySpecificTimeRewardRepository,
        protected CustomerRepository $customerRepository,
        protected OrderItemRepository $orderItemRepository,
        protected ProductFlatRepository $productFlatRepository,
        protected ProductRepository $productRepository,
        protected ProductRewardRepository $productRewardRepository,
        protected ProductSpecificTimeRewardRepository $productSpecificTimeRewardRepository,
        protected RedemptionSettingRepository $redemptionSettingRepository,
    ) {}

    /**
     * Using const variable for status
     */
    const STATUS_PENDING = 'pending';

    /**
     * Using const variable for product
     */
    const PRODUCT = 'product';

    /**
     * Using const variable for category
     */
    const CATEGORY = 'category';

    /**
     * Using const variable for attribute
     */
    const ATTRIBUTE = 'attribute';

    /**
     * Using const variable for cart
     */
    const CART = 'cart';

    /**
     * Using const variable for product purchase reward
     */
    const PRODUCT_PURCHASE_REWARD = 'The point is given for the product ( %s ) purchased in Order No : %s';

    /**
     * Using const variable for category purchase reward
     */
    const CATEGORY_PURCHASE_REWARD = 'The point is given for the product Category ( %s ) in Order No : %s';

    /**
     * Using const variable for attribute purchase reward
     */
    const ATTRIBUTE_PURCHASE_REWARD = 'The point is given for the product Attribute( %s ) in Order No : %s';

    /**
     * Using const variable for cart purchase reward
     */
    const CART_PURCHASE_REWARD = 'The point is given for Cart No : %s';

    /**
     * Get Reward for cart
     *
     * @param  mix  $data
     * @return $reward_point
     */
    public function getRewardsForCart($data)
    {
        $rewardPoints = 0;

        $prodRewards = [];

        $catRewards = [];

        $attrReward = [];

        $cartReward = [];

        foreach ($data->items as $item) {
            $orderId = $item->order_id;

            // Check for product reward points.
            $prodReward = $this->getProductRewards($item->additional['product_id'], $orderId, $data['customer_id'], $item->additional['quantity']);

            if (! in_array($prodReward, $prodRewards)
                && ! empty($prodReward)
            ) {
                array_push($prodRewards, $prodReward);
            }

            // Check for category reward points.
            $catReward = $this->getCategoryRewards($item->additional['product_id'], $orderId, $data['customer_id']);

            if (
                ! in_array($catReward, $catRewards)
                && ! empty($catReward)
            ) {
                array_push($catRewards, $catReward);
            }

            // Check for attribute reward points.
            $attrReward = $this->getAttributeRewards($item->additional['product_id'], $orderId, $data['customer_id']);

        }

        $cartReward = $this->getCartRewards($data);

        if (! empty($prodRewards)) {
            foreach ($prodRewards as $prod) {
                $check = $this->checkData($prod, self::PRODUCT);

                if (empty($check)) {
                    $rewardPoints += intval($prod['reward_points']);
                }
            }
        }

        if (! empty($catRewards)) {
            foreach ($catRewards as $cat) {
                $check = $this->checkData($cat, self::CATEGORY);

                if (empty($check)) {
                    $rewardPoints += intval($cat['reward_points']);
                }
            }
        }

        if (! empty($attrReward)) {
            foreach ($attrReward as $value) {
                $check = $this->checkData($value, self::ATTRIBUTE);

                if (empty($check)) {
                    $rewardPoints += intval($value['reward_points']);
                }
            }
        }

        if (! empty($cartReward)) {
            $check = $this->checkData($cartReward, self::CART);

            if (empty($check)) {
                $rewardPoints += intval($cartReward['reward_points']);
            }
        }

        return intval($rewardPoints);
    }

    /**
     * Get product reward
     *
     * @return array $array
     */
    public function getProductRewards($productId, $orderId, $customerId)
    {
        $rewardPoint = 0;

        $rewardEndDate = '';

        $products = $this->productRepository->find($productId);

        $product = $products->product_flats;

        $productName = '';

        if ($rewards = $this->productSpecificTimeRewardRepository->findByProductId($productId)) {
            $rewardPoint += $rewards->reward_points;

            $rewardEndDate = $rewards->end_time;

            $productName = $product[0]['name'];
        } elseif ($rewards = $this->productRewardRepository->findByProductId($productId)) {
            $rewardPoint += intval($rewards->reward_points);

            $productName = $product[0]['name'];
        }

        if ($rewardPoint) {
            return [
                'name' => $productName,
                'order_id' => intval($orderId),
                'customer_id' => $customerId,
                'category_id' => null,
                'attribute_id' => null,
                'product_id' => $productId,
                'reward_points' => $rewardPoint,
                'end_date' => $rewardEndDate,
                'status' => self::STATUS_PENDING,
                'note' => sprintf(self::PRODUCT_PURCHASE_REWARD, $productName, $orderId),
            ];
        }

        return [];
    }

    /**
     * Get category reward
     *
     * @return array $array
     */
    public function getCategoryRewards($productId, $orderId, $customerId)
    {
        $rewardPoint = 0;

        $categoryName = '';

        $rewardEndDate = null;

        $categoryId = 0;

        $product = $this->productRepository->find($productId);

        $categories = $product->categories;

        foreach ($categories as $category) {
            $categoryDetail = null;

            if ($rewards = $this->categorySpecificTimeRewardRepository->findByCategoryId($category->id)) {
                $categoryDetail = $this->categoryRepository->find($category->id);

                $rewardPoint += $rewards->reward_points;

                $rewardEndDate = $rewards->end_time;

            } elseif ($rewards = $this->categoryRewardRepository->findByCategoryId($category->id)) {
                $categoryDetail = $this->categoryRepository->find($category->id);

                $rewardPoint += $rewards->reward_points;
            }

            if ($categoryDetail) {
                $categoryName .= $categoryDetail->name.', ';

                $categoryId = $category->id;
            }
        }

        if ($rewardPoint) {

            return [
                'order_id' => $orderId,
                'customer_id' => $customerId,
                'category_id' => $categoryId,
                'attribute_id' => null,
                'product_id' => $productId,
                'reward_points' => $rewardPoint ?? 0,
                'note' => sprintf(self::CATEGORY_PURCHASE_REWARD, $categoryName, $orderId),
                'status' => self::STATUS_PENDING,
                'end_date' => $rewardEndDate ?? null,
            ];
        }

        return [];
    }

    /**
     * Get attribute reward
     *
     * @return array $rewardPointArray
     */
    public function getAttributeRewards($productId, $orderId, $customerId)
    {
        $rewardPoint = 0;

        $rewardPointArray = [];

        $products = $this->productFlatRepository->where('product_id', $productId)->where('status', 1)->first();

        $attributeRewards = $this->attributeRewardRepository->where('status', 1)->get();

        foreach ($attributeRewards as $attributeReward) {
            $attribute = $this->attributeRepository->find($attributeReward->attribute_id);

            $checkAttribute = $products->product->getAttribute($attribute->code);

            if ($products->type == 'configurable') {
                $productVariants = $products->product->variants();

                foreach ($productVariants->get() as $productVariant) {
                    $checkAttribute = $productVariant->getAttribute($attribute->code);
                    break;
                }
            }

            if (
                isset($checkAttribute)
                && $checkAttribute
            ) {
                $rewardPointRecord = app('Webkul\Rewards\Repositories\RewardPointRepository')->findOneWhere([
                    'product_id' => $productId,
                    'attribute_id' => $attributeReward->attribute_id,
                    'customer_id' => $customerId,
                    'reward_points' => $attributeReward->reward_points,
                ]);

                $rewardPoint = intval($attributeReward->reward_points);

                if (
                    $rewardPoint
                    && ! $rewardPointRecord
                ) {
                    $resultantArray = [
                        'order_id' => $orderId,
                        'customer_id' => $customerId,
                        'category_id' => null,
                        'attribute_id' => $attribute->id,
                        'product_id' => $productId,
                        'reward_points' => $rewardPoint ?? 0,
                        'note' => sprintf(self::ATTRIBUTE_PURCHASE_REWARD, $attribute->code, $orderId),
                        'status' => self::STATUS_PENDING,
                        'end_date' => null,
                    ];

                    array_push($rewardPointArray, $resultantArray);
                }
            }
        }

        if ($rewardPoint) {
            return $rewardPointArray;
        }

        return [];
    }

    /**
     * Get Cart Reward
     *
     * @param  array  $data
     * @return array $rewardPoint
     */
    public function getCartRewards($data)
    {
        $amount = floatval($data['grand_total']);

        $cartRewardPoint = $this->cartRewardRepository->findCartByAmount($amount);

        $rewardPoint = [];

        if ($cartRewardPoint) {
            $rewardPoints = intval($cartRewardPoint->reward_points) ?? 0;

            $rewardPointRecord = app('Webkul\Rewards\Repositories\RewardPointRepository')->findOneWhere([
                'order_cart' => 1,
                'customer_id' => $data['customer_id'],
                'reward_points' => $rewardPoints,
            ]);

            if (! $rewardPoint) {
                $rewardPoint = [
                    'order_id' => $data['id'],
                    'customer_id' => $data['customer_id'],
                    'category_id' => null,
                    'attribute_id' => null,
                    'product_id' => null,
                    'reward_points' => $rewardPoints,
                    'note' => sprintf(self::CART_PURCHASE_REWARD, $data['cart_id']),
                    'status' => self::STATUS_PENDING,
                    'end_date' => null,
                ];
            }
        }

        return $rewardPoint;
    }

    /**
     * Redemption setting
     *
     * @param  int  $points
     * @return array $rewardPoint
     */
    public function redemption($points)
    {
        $redemption = $this->redemptionSettingRepository->getData();

        if (
            $redemption
            && $redemption->redemp_over_subtotal
        ) {
            return ($points * $redemption->conversion_rate) / $redemption->points;
        }

        return '';
    }

    /**
     * Check condition for reward
     *
     * @param  array  $data
     * @param  string  $flag
     * @return Builder
     */
    public function checkData($data, $flag)
    {
        $result = null;

        switch ($flag) {
            case self::PRODUCT:
                $result = RewardPoint::where('product_id', $data['product_id'])
                    ->where('customer_id', $data['customer_id'])
                    ->where('product_purchased', 1)
                    ->first();

                break;

            case self::CATEGORY:
                $result = RewardPoint::where('category_id', $data['category_id'])
                    ->where('customer_id', $data['customer_id'])
                    ->where('product_category', 1)
                    ->first();

                break;

            case self::ATTRIBUTE:
                $result = RewardPoint::where('attribute_id', $data['attribute_id'])
                    ->where('customer_id', $data['customer_id'])
                    ->where('product_attribute', 1)
                    ->first();

                break;

            case self::CART:
                if (! empty($data['order_id'])) {
                    $result = RewardPoint::where('order_id', $data['order_id'])
                        ->where('customer_id', $data['customer_id'])
                        ->where('order_cart', 1)
                        ->first();
                }

                break;

            default:
                $result = null;

                break;
        }

        return $result;
    }
}
