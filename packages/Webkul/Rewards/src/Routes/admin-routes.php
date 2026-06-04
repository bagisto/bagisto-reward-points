<?php

use Illuminate\Support\Facades\Route;
use Webkul\Rewards\Http\Controllers\Admin\AttributeRewardController;
use Webkul\Rewards\Http\Controllers\Admin\CartRewardController;
use Webkul\Rewards\Http\Controllers\Admin\CategoryRewardController;
use Webkul\Rewards\Http\Controllers\Admin\CategorySpecificRewardController;
use Webkul\Rewards\Http\Controllers\Admin\ProductRewardController;
use Webkul\Rewards\Http\Controllers\Admin\ProductSpecificRewardController;
use Webkul\Rewards\Http\Controllers\Admin\RedemtionSettingController;
use Webkul\Rewards\Http\Controllers\Admin\SystemDetailsController;

Route::group(['middleware' => ['admin'], 'prefix' => config('app.admin_url')], function () {
    Route::prefix('rewards')->group(function () {

        /**
         * Product Reward Routes
         */
        Route::controller(ProductRewardController::class)->group(function () {
            Route::prefix('product-list')->group(function () {
                Route::get('', 'index')->name('admin.reward.product.index');

                Route::get('create', 'create')->name('admin.reward.product.create-product-reward');

                Route::post('searchProducts', 'searchProducts')->name('admin.reward.product.get-product');

                Route::post('search-products-for-update/{id}', 'searchProductsForUpdate')->name('admin.reward.product.get-product-for-update');

                Route::post('store', 'productRewardStore')->name('admin.reward.product.store_product_reward');

                Route::get('edit/{id}', 'editProductReward')->name('admin.reward.product.edit_product_reward');

                Route::post('update/{id}', 'productRewardUpdate')->name('admin.reward.product.update_product_reward');

                Route::post('delete/{id}', 'destroy')->name('admin.reward.product.delete_product_reward');

                Route::post('mass-delete', 'massDestroy')->name('admin.reward.product.mass_delete');

                Route::post('mass-update', 'massUpdate')->name('admin.reward.product.mass_update');
            });
        });

        /**
         * Product Reward for specific time Routes
         */
        Route::controller(ProductSpecificRewardController::class)->group(function () {
            Route::prefix('product-specific-time')->group(function () {
                Route::get('', 'specificIndex')->name('admin.reward.product.product-specific-time');

                Route::get('create', 'createSpecificProduct')->name('admin.reward.product.create_product_specific_reward');

                Route::post('search-products-for-specific', 'searchProductsForSpecific')->name('admin.reward.product.get-product-specific');

                Route::post('store', 'productSpecificTimeRewardStore')->name('admin.reward.product.store_product_specific_reward');

                Route::post('search-products-for-specific-update/{id}', 'searchProductsForSpecificUpdate')->name('admin.reward.product.get-product-specific-for-update');

                Route::get('edit/{id}', 'editProductSpecificReward')->name('admin.reward.product.edit_product_specific_reward');

                Route::post('update/{id}', 'productSpecificTimeRewardUpdate')->name('admin.reward.product.update_product_specific_reward');

                Route::post('delete/{id}', 'destroySpecific')->name('admin.reward.product.delete_product_specific_Reward');

                Route::post('mass-delete', 'massDestroySpecific')->name('admin.reward.product.mass_delete_specific');

                Route::post('mass-update', 'massUpdateSpecific')->name('admin.reward.product.mass_update_specific');
            });
        });

        /**
         * Category Reward Routes
         */
        Route::controller(CategoryRewardController::class)->group(function () {
            Route::prefix('category-list')->group(function () {
                Route::get('', 'index')->name('admin.reward.category.index');

                Route::get('create', 'create')->name('admin.reward.category.create_category_reward');

                Route::post('search-categories', 'searchCategories')->name('admin.reward.category.search-categories');

                Route::post('store', 'Store')->name('admin.reward.category.store_category_reward');

                Route::post('search-categories-update/{id}', 'searchCategoriesUpdate')->name('admin.reward.category.search-categories-update');

                Route::get('edit/{id}', 'edit')->name('admin.reward.category.edit_category_reward');

                Route::post('update/{id}', 'update')->name('admin.reward.category.update_category_reward');

                Route::post('delete/{id}', 'destroy')->name('admin.reward.category.delete_category_reward');

                Route::post('mass-delete', 'massDestroy')->name('admin.reward.category.mass_delete');

                Route::post('mass-update', 'massUpdate')->name('admin.reward.category.mass_update');
            });
        });

        /**
         * Category specific Time Reward Routes
         */
        Route::controller(CategorySpecificRewardController::class)->group(function () {
            Route::prefix('category-specific-time')->group(function () {
                Route::get('', 'specificIndex')->name('admin.reward.category.category_specific_time');

                Route::get('create', 'specificCreate')->name('admin.reward.category.create_category_specific_reward');

                Route::post('search-categories-specific', 'searchCategoriesSpecific')->name('admin.reward.category.search-categories-for-specific');

                Route::post('store', 'specificStore')->name('admin.reward.category.store_category_specific_reward');

                Route::get('edit/{id}', 'specificEdit')->name('admin.reward.category.edit_category_specific_reward');

                Route::post('search-categories-specific-update/{id}', 'searchCategoriesSpecificUpdate')->name('admin.reward.category.search-categories-for-specific-update');

                Route::post('update/{id}', 'specificUpdate')->name('admin.reward.category.update_category_specific_reward');

                Route::post('delete/{id}', 'destroySpecific')->name('admin.reward.category.delete_category_specific_reward');

                Route::post('mass-delete', 'massDestroySpecific')->name('admin.reward.category.mass_delete_specific');

                Route::post('mass-update', 'massUpdateSpecific')->name('admin.reward.category.mass_update_specific');
            });
        });

        /**
         * Cart Reward Routes
         */
        Route::controller(CartRewardController::class)->prefix('cart')->group(function () {
            Route::get('', 'index')->name('admin.reward.cart.index');

            Route::get('create', 'create')->name('admin.reward.cart.create');

            Route::post('store', 'store')->name('admin.reward.cart.store');

            Route::get('edit/{id}', 'edit')->name('admin.reward.cart.edit');

            Route::post('update/{id}', 'update')->name('admin.reward.cart.update');

            Route::post('delete/{id}', 'destroy')->name('admin.reward.cart.delete');

            Route::post('mass-delete', 'massDestroy')->name('admin.reward.cart.mass_delete');

            Route::post('mass-update', 'massUpdate')->name('admin.reward.cart.mass_update');
        });

        /**
         * Attribute Reward Routes
         */
        Route::controller(AttributeRewardController::class)->prefix('attribute')->group(function () {
            Route::get('', 'index')->name('admin.reward.attribute.index');

            Route::get('create', 'create')->name('admin.reward.attribute.create');

            Route::post('store', 'store')->name('admin.reward.attribute.store');

            Route::get('edit/{id}', 'edit')->name('admin.reward.attribute.edit');

            Route::post('update/{id}', 'update')->name('admin.reward.attribute.update');

            Route::post('delete/{id}', 'destroy')->name('admin.reward.attribute.delete');

            Route::post('mass-delete', 'massDestroy')->name('admin.reward.attribute.mass_delete');

            Route::post('mass-update', 'massUpdate')->name('admin.reward.attribute.mass_update');
        });

        /**
         * System Reward Routes
         */
        Route::controller(SystemDetailsController::class)->prefix('system')->group(function () {
            Route::get('', 'index')->name('admin.reward.system.index');

            Route::get('view/{id}', 'view')->name('admin.reward.system.view');
        });

        /**
         * Redemption Settings
         */
        Route::controller(RedemtionSettingController::class)->prefix('redemption')->group(function () {
            Route::get('', 'index')->name('admin.reward.redemption.index');

            Route::post('update', 'store')->name('admin.reward.redemption.update');
        });
    });
});
