<?php

Route::group(['middleware' => ['web', 'locale', 'theme', 'currency']], function () {

    
    // Apply Points Routes
    Route::post('checkout/cart/points', 'Webkul\Rewards\Http\Controllers\Shop\CartController@applyPoints')->name('rewards.checkout.cart.points.apply');

    Route::delete('checkout/cart/points', 'Webkul\Rewards\Http\Controllers\Shop\CartController@removePoints')->name('rewards.checkout.points.remove.points');
  
    //Checkout Save Order
    Route::post('/checkout/save-order', 'Webkul\Rewards\Http\Controllers\Shop\OnepageController@saveOrder')->name('shop.checkout.save-order');

    // overide Minicart Route
    Route::get('/mini-cart', 'Webkul\Rewards\Http\Controllers\Velocity\CartController@getMiniCartDetails')
            ->name('velocity.cart.get.details');

    // Show Product Review Form Store
    Route::post('/product/{slug}/review', 'Webkul\Rewards\Http\Controllers\Shop\ReviewController@store')->defaults('_config', [
        'redirect' => 'shop.home.index'
    ])->name('shop.reviews.store');

    //registration form show
     Route::get('register', 'Webkul\Rewards\Http\Controllers\Customer\RegistrationController@show')->defaults('_config', [
        'view' => 'shop::customers.signup.index'
    ])->name('customer.register.index1');

    //registration form store
    Route::post('register', 'Webkul\Rewards\Http\Controllers\Customer\RegistrationController@create')->defaults('_config', [
        'redirect' => 'customer.session.index',
    ])->name('customer.register.create1');

    //customer routes starts here
    Route::prefix('customer')->group(function () {
      
        // Auth Routes
        Route::group(['middleware' => ['customer']], function () {
            //customer account
            Route::prefix('account')->group(function () {
                 //customer rewards
                Route::get('rewards', 'Webkul\Rewards\Http\Controllers\RewardController@index')->defaults('_config', [
                    'view' => 'shop::customers.rewards.index'
                ])->name('customer.rewards.index');

            });
        });
    });
});
