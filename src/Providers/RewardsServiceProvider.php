<?php

namespace Webkul\Rewards\Providers;

use Illuminate\Database\Eloquent\Factory as EloquentFactory;
use Illuminate\Support\ServiceProvider;
use Illuminate\Routing\Router;
use Illuminate\Foundation\AliasLoader;
use Cart;


class RewardsServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot(Router $router)
    {
        include __DIR__ . '/../Http/admin-routes.php';
        include __DIR__ . '/../Http/front-routes.php';

        $this->app->register(ModuleServiceProvider::class);
        $this->app->register(EventServiceProvider::class);

        $this->loadMigrationsFrom(__DIR__ . '/../Database/Migrations');

        $this->loadTranslationsFrom(__DIR__ . '/../Resources/lang', 'rewards');

        $this->loadViewsFrom(__DIR__ . '/../Resources/views', 'rewards');

        $this->publishables();

        $loader = AliasLoader::getInstance();

        $loader->alias('cart', CartFacade::class);

        $this->app->singleton('cart', function () {
            return new Cart();
        });

        $this->app->bind('cart', 'Webkul\Rewards\Cart');
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
    }

    /**
     * Register package config.
     *
     * @return void
     */
    protected function registerConfig()
    {
        $this->mergeConfigFrom(
            dirname(__DIR__) . '/Config/admin-menu.php', 'menu.admin'
        );

        $this->mergeConfigFrom(
            dirname(__DIR__) . '/Config/shop-menu.php', 'menu.customer'
        );

        $this->mergeConfigFrom(
            dirname(__DIR__) . '/Config/carriers.php', 'carriers'
        );

        $this->mergeConfigFrom(
            dirname(__DIR__) . '/Config/system.php', 'core'
        );
    }

    /**
     * Publish assets.
     *
     * @return void
     */
    protected function publishables(){
        
        $this->publishes([
            __DIR__ . '/../../publishable/assets/' => public_path('themes/default/assets'),
        ], 'public');

        $this->publishes([
            __DIR__ . '/../Resources/views/shop/velocity/' => resource_path('themes/velocity/views'),
        ]);

        $this->publishes([
            __DIR__ . '/../Repositories/sales' => base_path('/packages/Webkul/Sales/src'),
        ]);
       
        $this->publishes([
            __DIR__ . '/../Resources/views/overide/Admin' => base_path('/packages/Webkul/Admin'),
        ]);   

        //over ride all existing core models of Bagisto
        $this->overrideModels();
    }

     /**
     * Register the console commands of this package
     *
     * @return void
     */
    protected function registerCommands(): void
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                \Webkul\Rewards\Console\Commands\RewardByDateOfBirth::class
            ]);
        }
    }

    /**
     * Override the existing models
     */
    public function overrideModels()
    {
        $this->app->concord->registerModel(\Webkul\Customer\Contracts\Customer::class, \Webkul\Rewards\Models\Customer::class);
        $this->app->concord->registerModel(\Webkul\Checkout\Contracts\Cart::class, \Webkul\Rewards\Models\Cart::class);
    }
}
