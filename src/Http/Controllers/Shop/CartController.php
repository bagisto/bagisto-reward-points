<?php

namespace Webkul\Rewards\Http\Controllers\Shop;

use Illuminate\Support\Facades\Log;
use Webkul\Customer\Repositories\WishlistRepository;
use Webkul\Product\Repositories\ProductRepository;
use Webkul\Checkout\Contracts\Cart as CartModel;
use Illuminate\Support\Facades\Event;
use Cart;
use Webkul\Shop\Http\Controllers\CartController as baseCartController;

class CartController extends baseCartController
{
    /**
     * WishlistRepository Repository object
     *
     * @var \Webkul\Customer\Repositories\WishlistRepository
     */
    protected $wishlistRepository;

    /**
     * ProductRepository object
     *
     * @var \Webkul\Product\Repositories\ProductRepository
     */
    protected $productRepository;

    /**
     * Create a new controller instance.
     *
     * @param  \Webkul\Customer\Repositories\CartItemRepository  $wishlistRepository
     * @param  \Webkul\Product\Repositories\ProductRepository  $productRepository
     * @return void
     */
    public function __construct(
        WishlistRepository $wishlistRepository,
        ProductRepository $productRepository
    )
    {
        $this->middleware('customer')->only(['moveToWishlist']);

        $this->wishlistRepository = $wishlistRepository;

        $this->productRepository = $productRepository;
    }

   

    /**
     * Apply coupon to the cart
     *
     * @return \Illuminate\Http\Response
    */
    public function applyPoints()
    {
        $points = request()->get('points');

        try {
            if ($points) {
                Cart::setPoints($points)->collectTotals();

                if (Cart::getCart()->points == $points) {
                    return response()->json([
                        'success' => true,
                        'message' => trans('shop::app.checkout.total.success-points'),
                    ]);
                }
            }

            return response()->json([
                'success' => false,
                'message' => trans('shop::app.checkout.total.invalid-points'),
            ]);
        } catch (\Exception $e) {
            report($e);

            return response()->json([
                'success' => false,
                'message' => trans('shop::app.checkout.total.points-apply-issue'),
            ]);
        }
    }

    /**
     * Apply coupon to the cart
     *
     * @return \Illuminate\Http\Response
    */
    public function removePoints()
    {
        Cart::removePoints()->collectTotals();

        return response()->json([
            'success' => true,
            'message' => trans('shop::app.checkout.total.remove-points'),
        ]);
    }
}
