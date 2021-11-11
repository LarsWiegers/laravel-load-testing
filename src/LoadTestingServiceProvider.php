<?php

namespace Larswiegers\LoadTesting;

use Illuminate\Support\ServiceProvider;
use Larswiegers\LoadTesting\Console\RunK6Binary;

class LoadTestingServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        /*
         * Optional methods to load your package assets
         */
        // $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'laravel-load-testing');
        // $this->loadViewsFrom(__DIR__.'/../resources/views', 'laravel-load-testing');
        // $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        // $this->loadRoutesFrom(__DIR__.'/routes.php');

        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../config/config.php' => config_path('laravel-load-testing.php'),
            ], 'config');

            // Publishing the views.
            /*$this->publishes([
                __DIR__.'/../resources/views' => resource_path('views/vendor/laravel-load-testing'),
            ], 'views');*/

            // Publishing assets.
            /*$this->publishes([
                __DIR__.'/../resources/assets' => public_path('vendor/laravel-load-testing'),
            ], 'assets');*/

            // Publishing the translation files.
            /*$this->publishes([
                __DIR__.'/../resources/lang' => resource_path('lang/vendor/laravel-load-testing'),
            ], 'lang');*/

            // Registering package commands.
            // $this->commands([]);

            // Register the command if we are using the application via the CLI
            if ($this->app->runningInConsole()) {
                $this->commands([
                    RunK6Binary::class,
                ]);
            }
        }
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        // Automatically apply the package configuration
        $this->mergeConfigFrom(__DIR__.'/../config/config.php', 'laravel-load-testing');

        // Register the main class to use with the facade
        $this->app->singleton('laravel-load-testing', function () {
            return new LoadTest;
        });
    }
}
