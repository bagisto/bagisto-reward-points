<?php

namespace Webkul\Rewards\Repositories;

use Carbon\Carbon;
use Illuminate\Container\Container;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Event;
use Webkul\Core\Eloquent\Repository;
use Webkul\Product\Repositories\ProductRepository;
use Webkul\Rewards\Contracts\RewardPoint;
use Webkul\Rewards\Helpers\CartHelper;
use Webkul\Rewards\Helpers\CustomerRegisterHelper;
use Webkul\Sales\Repositories\OrderItemRepository;

class RewardPointRepository extends Repository
{
    /**
     * Create a new repository instance.
     *
     * @return void
     */
    public function __construct(
        protected CartHelper $cartHelper,
        protected CustomerRegisterHelper $customerRegisterHelper,
        protected OrderItemRepository $orderItemRepository,
        protected ProductRepository $productRepository,
        Container $container,
    ) {
        parent::__construct($container);
    }

    /**
     * Using const variable for review
     */
    const REVIEW = 'review';

    /**
     * Using const variable for register
     */
    const REGISTER = 'register';

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
     * Using const variable for pending status
     */
    const STATUS_PENDING = 'pending';

    /**
     * Using const variable for completed status
     */
    const STATUS_COMPLETE = 'completed';

    /**
     * Using const variable for processing status
     */
    const STATUS_PROCESSING = 'processing';

    /**
     * Using const variable for used status
     */
    const STATUS_USED = 'used';

    /**
     * Using const variable for approved status
     */
    const STATUS_APPROVED = 'approved';

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
     * Using const variable for product review reward
     */
    const PRODUCT_REVIEW_REWARD = 'Reward point given for the review of product number : %s';

    /**
     * Using const variable for customer register reward
     */
    const CUSTOMER_REGISTER_REWARD = 'The Point is given when customer Register';

    /**
     * Using const variable for used reward
     */
    const CUSTOMER_USED_REWARD = 'You have used %s points in Order No %s';

    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return RewardPoint::class;
    }

    /**
     * Create record
     *
     * @param  mix  $data
     * @return bool
     */
    public function create($data)
    {
        if (core()->getConfigData('reward.general.general.module-status')) {
            $prodReward = [];

            $catReward = [];

            $attrReward = [];

            $cartReward = [];

            foreach ($data->items as $item) {
                $orderItem = $this->orderItemRepository->find($item->id);

                $orderId = $item->order_id;

                $prodReward[] = $this->cartHelper->getProductRewards($orderItem->additional['product_id'], $orderId, $data['customer_id'], $item->additional['quantity']);

                $catReward = $this->cartHelper->getCategoryRewards($orderItem->additional['product_id'], $orderId, $data['customer_id']);

                $attrReward = $this->cartHelper->getAttributeRewards($orderItem->additional['product_id'], $orderId, $data['customer_id']);
            }

            $cartReward = $this->cartHelper->getCartRewards($data);

            if ($data->cart->points) {
                $this->usedRewardPoints($data);
            }

            if ($prodReward) {
                foreach ($prodReward as $value) {
                    $check = $this->checkData($value, self::PRODUCT);

                    if (empty($check)) {
                        $this->insertRewardPoints($value, 'product_purchased', 1);
                    }
                }
            }

            if ($catReward) {
                $check = $this->checkData($catReward, self::CATEGORY);

                if (empty($check)) {
                    $this->insertRewardPoints($catReward, 'product_category', 1);
                }
            }

            if ($cartReward) {
                $check = $this->checkData($cartReward, self::CART);

                if (empty($check)) {
                    $this->insertRewardPoints($cartReward, 'order_cart', 1);
                }
            }

            if ($attrReward) {
                foreach ($attrReward as $value) {
                    $check = $this->checkData($value, self::ATTRIBUTE);

                    if (empty($check)) {
                        $this->insertRewardPoints($value, 'product_attribute', 1);
                    }
                }
            }
        }
    }

    /**
     * Update status
     *
     * @param  array  $order
     * @param  string  $status
     * @return bool
     */
    public function updateStatus($order, $status)
    {
        if (core()->getConfigData('reward.general.general.module-status')) {
            $order = app('Webkul\Sales\Repositories\OrderRepository')->find($order['id']);
            if (
                $order
                && $status == self::STATUS_COMPLETE
            ) {
                $rewards = $this->model->where('order_id', $order->id)->get();

                if ($rewards) {
                    foreach ($rewards as $reward) {
                        $this->updateRewardStatus($reward, self::STATUS_APPROVED);
                    }

                    return true;
                }
            } elseif ($order) {
                $rewards = $this->model->where('order_id', $order->id)->get();

                if ($rewards) {
                    foreach ($rewards as $reward) {
                        $this->updateRewardStatus($reward, $status);
                    }

                    return true;
                }
            }
        }

        return false;
    }

    /**
     * Add Review reward
     *
     * @param  array  $data
     * @return bool
     */
    public function addReviewReward($data)
    {
        if (core()->getConfigData('reward.general.general.module-status')) {

            $current = Carbon::now();

            $check = $this->checkData($data, 'review');

            if (empty($check)) {
                $rewards = $this->model->create([
                    'order_id' => null,
                    'product_id' => intval($data['product_id']),
                    'customer_id' => $data['customer_id'],
                    'reward_points' => core()->getConfigData('reward.general.general.reward-when-product-reviewed'),
                    'note' => sprintf(self::PRODUCT_REVIEW_REWARD, $data['product_id']),
                    'status' => self::STATUS_PENDING,
                    'exp_date' => core()->getConfigData('reward.general.general.customer_review_exp_days') ? $current->addDays(core()->getConfigData('reward.general.general.customer_review_exp_days')) : null,
                    'product_reviewed' => 1,
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
     * Total reward points
     *
     * @param  int  $id
     * @return int $points
     */
    public function totalRewardPoints($id)
    {
        $totalRewardPoints = $this->model->where('customer_id', $id)->where('status', self::STATUS_APPROVED)->sum('reward_points');

        $usedRewardPoints = $this->model->where('customer_id', $id)->where('status', self::STATUS_USED)->sum('reward_points');

        return $totalRewardPoints - $usedRewardPoints;
    }

    /**
     * Set reward point on register
     *
     * @param  object  $customer
     * @return bool
     */
    public function setRewardPointOnRegister($customer)
    {
        $check = $this->checkData(array_merge($customer->toArray(), ['customer_id' => $customer->id]), 'register');

        $current = Carbon::now();

        if (
            core()->getConfigData('reward.general.general.reward-when-customer-register')
            && $check == null
        ) {
            $rewards = $this->model->create([
                'customer_id' => $customer->id,
                'customer_registed' => 1,
                'reward_points' => core()->getConfigData('reward.general.general.reward-when-customer-register'),
                'note' => self::CUSTOMER_REGISTER_REWARD,
                'status' => self::STATUS_APPROVED,
                'exp_date' => core()->getConfigData('reward.general.general.reward-when-customer-register-exp-days') ? $current->addDays((int) core()->getConfigData('reward.general.general.reward-when-customer-register-exp-days')) : null,
            ]);

            Event::dispatch('reward.points.register.after', [$rewards]);
        }

        return true;
    }

    /**
     * Insert reward point
     *
     * @param  array  $data
     * @return void
     */
    public function insertRewardPoints($data, $key, $value)
    {
        if ($data) {
            Event::dispatch('reward.points.save.before', $data);

            $rewards = $this->model->create([
                'order_id' => $data['order_id'],
                'customer_id' => $data['customer_id'],
                'category_id' => $data['category_id'],
                'attribute_id' => $data['attribute_id'],
                'product_id' => $data['product_id'],
                'reward_points' => $data['reward_points'],
                'note' => $data['note'],
                'status' => $data['status'] ?: self::STATUS_PENDING,
                'exp_date' => $data['end_date'] ? Carbon::parse($data['end_date'])->format('Y-m-d') : null,
                $key => $value,
            ]);

            Event::dispatch('reward.points.save.after', [$rewards]);
        }
    }

    /**
     * Used reward points
     *
     * @param  array  $data
     * @return bool
     */
    public function usedRewardPoints($data)
    {
        if ($data) {
            $rewards = $this->model->create([
                'order_id' => $data['id'],
                'customer_id' => $data['customer_id'],
                'reward_points' => $data['points'],
                'note' => sprintf(self::CUSTOMER_USED_REWARD, $data['points'], $data['id']),
                'status' => self::STATUS_USED,
            ]);

            Event::dispatch('reward.points.save.after', [$rewards]);

            return true;
        }

        return false;
    }

    /**
     * Update reward status
     *
     * @param  object  $data
     * @param  string  $status
     * @return void
     */
    public function updateRewardStatus($data, $status)
    {
        if ($data->status !== self::STATUS_USED) {
            $data->status = $status;

            $data->save();

            Event::dispatch('reward.points.update.after', [$data]);
        }
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
        if (! $data) {
            return false;
        }

        $reward = app(RewardPointRepository::class)->scopeQuery(function ($query) use ($data, $flag) {
            $q = $query->where('customer_id', $data['customer_id']);

            if ($flag === self::REGISTER) {
                $q->where('customer_registed', 1);
            }

            if ($flag === self::REVIEW) {
                $q->where('product_reviewed', 1);
            }

            if ($flag === self::PRODUCT) {
                if (! empty($data['product_id'])) {
                    $q->where('product_id', $data['product_id']);
                }
                $q->where('product_purchased', 1);
            }

            if ($flag === self::CATEGORY) {
                if (! empty($data['category_id'])) {
                    $q->where('category_id', $data['category_id']);
                }
                $q->where('product_category', 1);
            }

            if ($flag === self::PRODUCT) {
                $q->where('attribute_id', $data['attribute_id']);
            }

            if ($flag === self::CART) {
                $q->where('order_cart', 1);
            }

            return $q;
        });

        return $reward->first();
    }
}
