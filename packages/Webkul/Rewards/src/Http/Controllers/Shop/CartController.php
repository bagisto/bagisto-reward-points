<?php

namespace Webkul\Rewards\Http\Controllers\Shop;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Http\Response;
use Webkul\Checkout\Facades\Cart;
use Webkul\Checkout\Repositories\CartItemRepository;
use Webkul\Rewards\Helpers\CartHelper;
use Webkul\Rewards\Http\Resources\CartResource as Resources;
use Webkul\Rewards\Repositories\RewardPointRepository;
use Webkul\Shop\Http\Controllers\CartController as BaseCartController;

class CartController extends BaseCartController
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(
        protected CartHelper $cartHelper,
        protected CartItemRepository $cartItemRepository,
        protected RewardPointRepository $rewardPointRepository,
    ) {}

    /**
     * Apply coupon to the cart
     *
     * @return Response
     */
    public function applyPoints()
    {
        $points = request()->get('points');

        $cart = Cart::getCart();

        $totalRewardPoints = $this->rewardPointRepository->totalRewardPoints(auth()->guard('customer')->user()->id);

        $maxRewardPoints = core()->getConfigData('reward.general.general.reward-used-at-one-time');

        try {
            if ($points) {
                if ($cart->points) {
                    Cart::removePoints()->collectTotals();
                }

                $redemption = $this->cartHelper->redemption($points);

                if ($redemption > $cart->base_grand_total) {
                    return response()->json([
                        'success' => false,
                        'message' => trans('rewards::app.checkout.total.warning-required-less-point'),
                    ]);
                }

                if ($totalRewardPoints < $points) {
                    return response()->json([
                        'success' => false,
                        'message' => trans('rewards::app.checkout.total.you-have-only').$totalRewardPoints.' Points',
                    ]);
                }

                if ($maxRewardPoints < $points) {
                    return response()->json([
                        'success' => false,
                        'message' => trans('rewards::app.checkout.total.use-can-use-only').$maxRewardPoints.' points at a time',
                    ]);
                }

                Cart::setPoints($points)->collectTotals();

                if (Cart::getCart()->points == $points) {
                    return response()->json([
                        'success' => true,
                        'message' => trans('rewards::app.checkout.total.success-points'),
                    ]);
                }
            }

        } catch (\Exception $e) {
            report($e);

            return response()->json([
                'success' => false,
                'message' => trans('rewards::app.checkout.total.points-apply-issue'),
            ]);
        }
    }

    /**
     * Removes the item from the cart if it exists.
     */
    public function destroy(): JsonResource
    {
        $this->cartItemRepository->delete(request()->input('cart_item_id'));

        Cart::collectTotals();

        return new JsonResource([
            'data' => new Resources(Cart::getCart()),
            'message' => trans('shop::app.checkout.cart.success-remove'),
        ]);
    }

    /**
     * Apply coupon to the cart
     *
     * @return Response
     */
    public function removePoints()
    {
        Cart::removePoints()->collectTotals();

        return response()->json([
            'success' => true,
            'message' => trans('rewards::app.checkout.total.remove-points'),
        ]);
    }

    /**
     * Retrieved the mini cart details
     *
     * @return Response
     */
    public function getMiniCartReward()
    {
        Cart::collectTotals();

        $cart = Cart::getCart();

        if (! empty($cart)) {
            $rewardPoints = $redemptionPoints = 0;

            if (
                core()->getConfigData('reward.general.general.module-status')
                && auth()->guard('customer')->user()
            ) {
                $rewardPoints = $this->cartHelper->getRewardsForCart($cart);

                if (! empty($cart->points)) {
                    $redemptionPoints = $this->cartHelper->redemption($cart->points);
                }
            }

            $cart['base_redemption_points'] = $redemptionPoints ?? core()->currency($redemptionPoints);

            $cart['reward_points'] = $rewardPoints;

            $response = [
                'data' => $cart ? new Resources($cart) : null,
            ];
        }

        if (session()->has('info')) {
            $response['message'] = session()->get('info');
        }

        return new JsonResource($response);
    }
}
