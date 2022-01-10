<?php

namespace Webkul\Rewards\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Event;

class EventServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    { 
        Event::listen('bagisto.shop.layout.head', function ($viewRenderEventManager) {
            $viewRenderEventManager->addTemplate('rewards::shop.layouts.style');
        });

        Event::listen('bagisto.admin.layout.head', function ($viewRenderEventManager) {
            $viewRenderEventManager->addTemplate('rewards::admin.layouts.style');
        });

        Event::listen('reward.points.save.after', 'Webkul\Rewards\Listeners\Rewards@sendRewardMail');

        Event::listen('reward.points.update.after', 'Webkul\Rewards\Listeners\Rewards@sendRewardMail');

        Event::listen('reward.points.dob.after', 'Webkul\Rewards\Listeners\Rewards@sendRewardDOBMail');

        Event::listen('reward.points.review.after','Webkul\Rewards\Listeners\Rewards@sendReviewMail');

        Event::listen('reward.points.register.after','Webkul\Rewards\Listeners\Rewards@sendRegisterMail');
    }
}