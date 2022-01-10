<?php

Route::group(['middleware' => ['web']], function () {

    Route::prefix('admin/rewards/')->group(function () {

        Route::group(['middleware' => ['admin']], function () {

            //General Routes

            Route::get('/general', 'Webkul\Rewards\Http\Controllers\GeneralController@index')->defaults('_config', [
                'view' => 'rewards::admin.rewards.general.index',
            ])->name('admin.reward.general.index');

            Route::post('/general', 'Webkul\Rewards\Http\Controllers\GeneralController@store')->defaults('_config', [
                'redirect' => 'admin.reward.general.index',
            ])->name('admin.reward.general.store');


            // Product Reward Routes
            Route::get('/product', 'Webkul\Rewards\Http\Controllers\ProductRewardController@index')->defaults('_config', [
                'view' => 'rewards::admin.rewards.product.index',
            ])->name('admin.reward.product.index');

            Route::get('/product/add-product-reward', 'Webkul\Rewards\Http\Controllers\ProductRewardController@create')->defaults('_config', [
                'view' => 'rewards::admin.rewards.product.add-product-reward',
            ])->name('admin.reward.product.addproductreward');

            Route::get('/product/add-product-specific-reward', 'Webkul\Rewards\Http\Controllers\ProductRewardController@create')->defaults('_config', [
                'view' => 'rewards::admin.rewards.product.add-product-specific-reward',
            ])->name('admin.reward.product.addproductspecificreward');

            Route::get('/product/edit-product-reward/{id}', 'Webkul\Rewards\Http\Controllers\ProductRewardController@editProductReward')->defaults('_config', [
                'view' => 'rewards::admin.rewards.product.edit-product-reward',
            ])->name('admin.reward.product.editproductreward');

            Route::get('/product/edit-product-specific-reward/{id}', 'Webkul\Rewards\Http\Controllers\ProductRewardController@editProductSpecificReward')->defaults('_config', [
                'view' => 'rewards::admin.rewards.product.edit-product-specific-reward',
            ])->name('admin.reward.product.editproductspecificreward');

            Route::get('/product/specific-time', 'Webkul\Rewards\Http\Controllers\ProductRewardController@index')->defaults('_config', [
                'view' => 'rewards::admin.rewards.product.product-specific',
            ])->name('admin.reward.product.product_specific_time');

            Route::post('/productReward', 'Webkul\Rewards\Http\Controllers\ProductRewardController@productRewardStore')->defaults('_config', [
                'redirect' => 'admin.reward.product.index',
            ])->name('admin.reward.product.addproductReward');

            Route::post('/productReward/update/{id}', 'Webkul\Rewards\Http\Controllers\ProductRewardController@productRewardUpdate')->defaults('_config', [
                'redirect' => 'admin.reward.product.index',
            ])->name('admin.reward.product.updateproductReward');

            Route::post('/productSpecificTimeReward', 'Webkul\Rewards\Http\Controllers\ProductRewardController@productSpecificTimeRewardStore')->defaults('_config', [
                'redirect' => 'admin.reward.product.product_specific_time',
            ])->name('admin.reward.product.addproductSpecificTimeReward');

            Route::post('/productSpecificTimeReward/update/{id}', 'Webkul\Rewards\Http\Controllers\ProductRewardController@productSpecificTimeRewardUpdate')->defaults('_config', [
                'redirect' => 'admin.reward.product.product_specific_time',
            ])->name('admin.reward.product.updateproductspecificReward');

            // Category Reward Routes
            Route::get('/category-reward', 'Webkul\Rewards\Http\Controllers\CategoryRewardController@index')->defaults('_config', [
                'view' => 'rewards::admin.rewards.category.index',
            ])->name('admin.reward.category.index');

            Route::get('/category-specific-time-reward', 'Webkul\Rewards\Http\Controllers\CategoryRewardController@index')->defaults('_config', [
                'view' => 'rewards::admin.rewards.category.category-specific',
            ])->name('admin.reward.category.category_specific_time');

            Route::get('/category-reward/add-category-reward', 'Webkul\Rewards\Http\Controllers\CategoryRewardController@create')->defaults('_config', [
                'view' => 'rewards::admin.rewards.category.add-category-reward',
            ])->name('admin.reward.category.addcategoryreward');

            Route::get('/category-reward/add-category-specific-reward', 'Webkul\Rewards\Http\Controllers\CategoryRewardController@create')->defaults('_config', [
                'view' => 'rewards::admin.rewards.category.add-category-specific-reward',
            ])->name('admin.reward.category.addcategoryspecificreward');

            Route::get('/category-reward/edit-category-reward/{id}', 'Webkul\Rewards\Http\Controllers\CategoryRewardController@editCategoryReward')->defaults('_config', [
                'view' => 'rewards::admin.rewards.category.edit-category-reward',
            ])->name('admin.reward.category.editcategoryreward');

            Route::get('/category-reward/edit-category-specific-reward/{id}', 'Webkul\Rewards\Http\Controllers\CategoryRewardController@editCategorySpecificReward')->defaults('_config', [
                'view' => 'rewards::admin.rewards.category.edit-category-specific-reward',
            ])->name('admin.reward.category.editcategoryspecificreward');

            

            Route::post('/category-reward', 'Webkul\Rewards\Http\Controllers\CategoryRewardController@categoryRewardStore')->defaults('_config', [
                'redirect' => 'admin.reward.category.index',
            ])->name('admin.reward.category.addCategoryReward');

            Route::post('/category-reward/update/{id}', 'Webkul\Rewards\Http\Controllers\CategoryRewardController@categoryRewardUpdate')->defaults('_config', [
                'redirect' => 'admin.reward.category.index',
            ])->name('admin.reward.category.updatecategoryReward');

            Route::post('/category-specific-time-reward', 'Webkul\Rewards\Http\Controllers\CategoryRewardController@categorySpecificTimeRewardStore')->defaults('_config', [
                'redirect' => 'admin.reward.category.category_specific_time',
            ])->name('admin.reward.category.addCategorySpecificTimeReward');

            Route::post('/category-specific-time-reward/update/{id}', 'Webkul\Rewards\Http\Controllers\CategoryRewardController@categorySpecificTimeRewardUpdate')->defaults('_config', [
                'redirect' => 'admin.reward.category.category_specific_time',
            ])->name('admin.reward.product.updatecategoryspecificReward');

            // Cart Reward Route
            Route::get('/cart', 'Webkul\Rewards\Http\Controllers\CartRewardController@index')->defaults('_config', [
                'view' => 'rewards::admin.rewards.cart.index',
            ])->name('admin.reward.cart.index');
            Route::get('/cart/add-cart-reward', 'Webkul\Rewards\Http\Controllers\CartRewardController@create')->defaults('_config', [
                'view' => 'rewards::admin.rewards.cart.addcart',
            ])->name('admin.reward.cart.addcart');

            Route::post('/cart/add-cart-reward', 'Webkul\Rewards\Http\Controllers\CartRewardController@store')->defaults('_config', [
                'redirect' => 'admin.reward.cart.index',
            ])->name('admin.reward.cart.storecartReward');

            Route::post('/cart/update-cart-reward/{id}', 'Webkul\Rewards\Http\Controllers\CartRewardController@update')->defaults('_config', [
                'redirect' => 'admin.reward.cart.index',
            ])->name('admin.reward.cart.updatecartReward');

            Route::get('/cart/edit-cart-reward/{id}', 'Webkul\Rewards\Http\Controllers\CartRewardController@edit')->defaults('_config', [
                'view' => 'rewards::admin.rewards.cart.editcart',
            ])->name('admin.reward.cart.editCartReward');

            Route::post('/cart/delete-cart-reward/{id}', 'Webkul\Rewards\Http\Controllers\CartRewardController@destroy')->defaults('_config', [
                'redirect' => 'admin.reward.cart.index',
            ])->name('admin.reward.cart.deleteCartReward');

            // Attribute Reward Routes
            Route::get('/attribute', 'Webkul\Rewards\Http\Controllers\AttributeRewardController@index')->defaults('_config', [
                'view' => 'rewards::admin.rewards.attributes.index',
            ])->name('admin.reward.attribute.index');

            Route::get('/attribute/add-attribute-reward', 'Webkul\Rewards\Http\Controllers\AttributeRewardController@create')->defaults('_config', [
                'view' => 'rewards::admin.rewards.attributes.addattributereward',
            ])->name('admin.reward.attribute.addattributereward');

            Route::post('/attributes/add-attribute-reward', 'Webkul\Rewards\Http\Controllers\AttributeRewardController@store')->defaults('_config', [
                'redirect' => 'admin.reward.attribute.index',
            ])->name('admin.reward.attribute.storeAttributeReward');

            Route::post('/attribute/update-attribute-reward/{id}', 'Webkul\Rewards\Http\Controllers\AttributeRewardController@update')->defaults('_config', [
                'redirect' => 'admin.reward.attribute.index',
            ])->name('admin.reward.attribute.updateAttributeReward');

            Route::get('/attribute/edit-attribute-reward/{id}', 'Webkul\Rewards\Http\Controllers\AttributeRewardController@edit')->defaults('_config', [
                'view' => 'rewards::admin.rewards.attributes.editattributereward',
            ])->name('admin.reward.attribute.editAttributeReward');

            Route::post('/attribute/delete-attribute-reward/{id}', 'Webkul\Rewards\Http\Controllers\AttributeRewardController@destroy')->defaults('_config', [
                'redirect' => 'admin.reward.attribute.index',
            ])->name('admin.reward.cart.deleteAttributeReward');

            // System Reward Routes
            Route::get('/system', 'Webkul\Rewards\Http\Controllers\SystemDetailsController@index')->defaults('_config', [
                'view' => 'rewards::admin.rewards.system.index',
            ])->name('admin.reward.system.index');

            Route::get('/system/view/{id}', 'Webkul\Rewards\Http\Controllers\SystemDetailsController@view')->defaults('_config', [
                'view' => 'rewards::admin.rewards.system.view',
            ])->name('admin.rewards.system.view');


            // Redemption Settings
            Route::get('/redemption', 'Webkul\Rewards\Http\Controllers\RedemtionSettingController@index')->defaults('_config', [
                'view' => 'rewards::admin.rewards.redemption.index',
            ])->name('admin.reward.redemption.index');

            Route::post('/redemption/update', 'Webkul\Rewards\Http\Controllers\RedemtionSettingController@store')->defaults('_config', [
                'redirect' => 'admin.reward.redemption.index',
            ])->name('admin.reward.redemption.update');

        });
    });

});
