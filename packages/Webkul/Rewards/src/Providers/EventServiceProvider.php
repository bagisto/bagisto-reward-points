<?php

namespace Webkul\Rewards\Providers;

use Illuminate\Support\Facades\Event;
use Illuminate\Support\ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        Event::listen('bagisto.admin.layout.head.before', function ($viewRenderEventManager) {
            $viewRenderEventManager->addTemplate('rewards::admin.styles');
        });

        Event::listen('bagisto.shop.layout.header.before', function ($viewRenderEventManager) {
            $viewRenderEventManager->addTemplate('rewards::admin.styles');
        });

        if (core()->getConfigData('reward.general.general.module-status')) {
            Event::listen('bagisto.shop.customers.signup_form_controls.before', function ($viewRenderEventManager) {
                $viewRenderEventManager->addTemplate('rewards::shop.customers.account.sign-up');
            });

            // mini-cart-reward
            Event::listen('bagisto.shop.checkout.mini-cart.action.before', function ($viewRenderEventManager) {
                $viewRenderEventManager->addTemplate('rewards::shop.checkout.cart.mini-cart-reward');
            });

            // cart-reward summary
            Event::listen('bagisto.shop.checkout.cart.summary.coupon.before', function ($viewRenderEventManager) {
                $viewRenderEventManager->addTemplate('rewards::shop.checkout.cart.reward-summary');
            });

            // cart-reward points
            Event::listen('bagisto.shop.checkout.cart.summary.coupon.after', function ($viewRenderEventManager) {
                $viewRenderEventManager->addTemplate('rewards::shop.checkout.cart.points');
            });

            // checkout onepage-reward summary
            Event::listen('bagisto.shop.checkout.onepage.summary.coupon.before', function ($viewRenderEventManager) {
                $viewRenderEventManager->addTemplate('rewards::shop.checkout.cart.reward-summary');
            });

            // checkout onepage-reward points
            Event::listen('bagisto.shop.checkout.onepage.summary.coupon.after', function ($viewRenderEventManager) {
                $viewRenderEventManager->addTemplate('rewards::shop.checkout.cart.points');
            });

            // On Product's view page
            Event::listen('bagisto.shop.products.rating.before', function ($viewRenderEventManager) {
                $viewRenderEventManager->addTemplate('rewards::shop.products.view-product');
            });

            Event::listen('reward.points.save.after', 'Webkul\Rewards\Listeners\Rewards@sendRewardMail');

            Event::listen('reward.points.update.after', 'Webkul\Rewards\Listeners\Rewards@sendRewardMail');

            Event::listen('reward.points.dob.after', 'Webkul\Rewards\Listeners\Rewards@sendRewardDOBMail');

            Event::listen('reward.points.review.after', 'Webkul\Rewards\Listeners\Rewards@sendReviewMail');

            Event::listen('reward.points.register.after', 'Webkul\Rewards\Listeners\Rewards@sendRegisterMail');

            Event::listen('customer.registration.after', 'Webkul\Rewards\Listeners\Customer@register');

            Event::listen('customer.review.update.after', 'Webkul\Rewards\Listeners\Customer@updateReview');
        }
    }
}
