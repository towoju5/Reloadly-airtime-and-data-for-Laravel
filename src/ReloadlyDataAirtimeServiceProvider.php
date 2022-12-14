<?php

namespace Towoju5\ReloadlyDataAirtime;

use Illuminate\Support\ServiceProvider;

class ReloadlyDataAirtimeServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        /*
         * Optional methods to load your package assets
         */
        // $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'reloadly-data-airtime');
        // $this->loadViewsFrom(__DIR__.'/../resources/views', 'reloadly-data-airtime');
        // $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        // $this->loadRoutesFrom(__DIR__.'/routes.php');

        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../config/config.php' => config_path('reloadly-data-airtime.php'),
            ], 'config');

            // Publishing the views.
            /*$this->publishes([
                __DIR__.'/../resources/views' => resource_path('views/vendor/reloadly-data-airtime'),
            ], 'views');*/

            // Publishing assets.
            /*$this->publishes([
                __DIR__.'/../resources/assets' => public_path('vendor/reloadly-data-airtime'),
            ], 'assets');*/

            // Publishing the translation files.
            /*$this->publishes([
                __DIR__.'/../resources/lang' => resource_path('lang/vendor/reloadly-data-airtime'),
            ], 'lang');*/

            // Registering package commands.
            // $this->commands([]);
        }
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        // Automatically apply the package configuration
        $this->mergeConfigFrom(__DIR__.'/../config/config.php', 'reloadly-data-airtime');

        // Register the main class to use with the facade
        $this->app->singleton('reloadly-data-airtime', function () {
            return new ReloadlyDataAirtime;
        });
    }
}
