<?php

use Illuminate\Support\Facades\Route;
use Webkul\Rewards\Http\Controllers\Shop\CartController;
use Webkul\Rewards\Http\Controllers\Shop\OnepageController;
use Webkul\Rewards\Http\Controllers\Shop\ReviewController;
use Webkul\Rewards\Http\Controllers\Shop\RewardController;

Route::group(['middleware' => ['locale', 'theme', 'currency']], function () {
    Route::prefix('checkout')->group(function () {
        /**
         * Apply Points Routes
         */
        Route::controller(CartController::class)->group(function () {
            Route::post('cart/points', 'applyPoints')->name('rewards.checkout.cart.points.apply');

            Route::delete('cart/points', 'removePoints')->name('rewards.checkout.points.remove.points');
        });

        /**
         * Checkout Save Order
         */
        Route::controller(OnepageController::class)->group(function () {
            Route::post('orders', 'storeOrder')->name('shop.checkout.onepage.orders.reward.store');
        });
    });

    /**
     * Override Mini cart Route
     */
    Route::get('/mini-cart', [CartController::class, 'getMiniCartReward'])->name('reward.shop.checkout.cart.index');

    Route::delete('/destroy', [CartController::class, 'destroy'])->name('shop.checkout.cart.destroy');

    /**
     * Show Product Review Form Store
     */
    Route::post('/product/{slug}/review', [ReviewController::class, 'store'])->name('rewards.products.reviews.store');

    /**
     * Customer routes starts here
     */
    Route::prefix('customer')->group(function () {
        Route::group(['middleware' => ['customer']], function () {
            Route::prefix('account')->group(function () {
                /**
                 * Customer rewards
                 */
                Route::get('rewards', [RewardController::class, 'index'])->name('customer.rewards.index');
            });
        });
    });
});
