<?php

namespace Webkul\Rewards\Providers;

use Illuminate\Foundation\AliasLoader;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;
use Webkul\Checkout\Facades\Cart;
use Webkul\Customer\Contracts\Customer;
use Webkul\Rewards\Console\Commands\CheckRewardExpire;
use Webkul\Rewards\Console\Commands\DisableTimeReward;
use Webkul\Rewards\Console\Commands\InstallRewards;
use Webkul\Rewards\Console\Commands\RewardByDateOfBirth;
use Webkul\Rewards\Http\Controllers\Shop\OnepageController;
use Webkul\Rewards\Http\Controllers\Shop\ReviewController;
use Webkul\Rewards\Repositories\InvoiceRepository;
use Webkul\Rewards\Repositories\OrderRepository;
use Webkul\Sales\Repositories\InvoiceRepository as BaseInvoiceRepository;
use Webkul\Sales\Repositories\OrderRepository as BaseOrderRepository;
use Webkul\Shop\Http\Controllers\API\OnepageController as APIOnepageController;
use Webkul\Shop\Http\Controllers\API\ReviewController as APIReviewController;

class RewardsServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        /* loaders */
        Route::middleware('web')->group(__DIR__.'/../Routes/admin-routes.php');

        Route::middleware('web')->group(__DIR__.'/../Routes/front-routes.php');

        $this->app->register(ModuleServiceProvider::class);

        $this->app->register(EventServiceProvider::class);

        $this->loadMigrationsFrom(__DIR__.'/../Database/Migrations');

        $this->loadTranslationsFrom(__DIR__.'/../Resources/lang', 'rewards');

        $this->loadViewsFrom(__DIR__.'/../Resources/views', 'rewards');

        $this->publishable();

        $loader = AliasLoader::getInstance();

        $loader->alias('cart', CartFacade::class);

        $this->app->singleton('cart', function () {
            return new Cart;
        });

        if (core()->getConfigData('reward.general.general.module-status')) {
            $this->mergeConfigFrom(
                dirname(__DIR__).'/Config/admin-menu.php',
                'menu.admin'
            );

            $this->mergeConfigFrom(
                dirname(__DIR__).'/Config/shop-menu.php',
                'menu.customer'
            );
        }

        $this->app->bind('cart', 'Webkul\Rewards\Cart');

        if ($this->app->runningInConsole()) {
            $this->commands([
                InstallRewards::class,
            ]);
        }
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->registerConfig();

        $this->registerCommands();

        /**
         * Bind Sales OrderRepository to Reward OrderRepository
         */
        $this->app->bind(BaseOrderRepository::class, OrderRepository::class);

        $this->app->bind(BaseInvoiceRepository::class, InvoiceRepository::class);

        $this->app->bind(APIOnepageController::class, OnepageController::class);

        $this->app->bind(APIReviewController::class, ReviewController::class);
    }

    /**
     * Register package config.
     *
     * @return void
     */
    protected function registerConfig()
    {
        $this->mergeConfigFrom(
            dirname(__DIR__).'/Config/system.php',
            'core'
        );

        $this->mergeConfigFrom(
            dirname(__DIR__).'/Config/bagisto-vite.php',
            'bagisto-vite.viters'
        );
    }

    /**
     * Publish assets.
     *
     * @return void
     */
    protected function publishable()
    {
        $this->publishes([
            __DIR__.'/../Resources/views/shop/products/view/reviews.blade.php' => resource_path('themes/default/views/products/view/reviews.blade.php'),
        ]);

        $this->publishes([
            __DIR__.'/../Resources/views/shop/customers/account/orders/view.blade.php' => resource_path('themes/default/views/customers/account/orders/view.blade.php'),
        ]);

        $this->publishes([
            __DIR__.'/../Resources/views/admin/sales/orders/view.blade.php' => resource_path('views/vendor/admin/sales/orders/view.blade.php'),
        ]);

        $this->publishes([
            __DIR__.'/../Resources/views/admin/sales/invoices/view.blade.php' => resource_path('views/vendor/admin/sales/invoices/view.blade.php'),
        ]);

        $this->publishes([
            __DIR__.'/../Resources/views/admin/sales/invoices/pdf.blade.php' => resource_path('views/vendor/admin/sales/invoices/pdf.blade.php'),
        ]);

        /**
         * Over ride all existing core models of Bagisto
         */
        $this->overrideModels();

        /**
         * Publish Assets
         */
        $this->publishAssets();
    }

    /**
     * Register the console commands of this package
     */
    protected function registerCommands(): void
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                RewardByDateOfBirth::class,
                CheckRewardExpire::class,
                DisableTimeReward::class,
            ]);
        }
    }

    /**
     * Override the existing models
     */
    public function overrideModels()
    {
        $this->app->concord->registerModel(Customer::class, \Webkul\Rewards\Models\Customer::class);

        $this->app->concord->registerModel(\Webkul\Checkout\Contracts\Cart::class, \Webkul\Rewards\Models\Cart::class);
    }

    /**
     * Publish the assets.
     *
     * @return void
     */
    protected function publishAssets()
    {
        $this->publishes([
            __DIR__.'/../../publishable' => public_path('themes/reward'),
        ], 'public');
    }
}
