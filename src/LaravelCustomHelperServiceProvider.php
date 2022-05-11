<?php

namespace RanjbarAli\LaravelCustomHelper;

use Illuminate\Support\Facades\File;
use Illuminate\Support\ServiceProvider;
use RanjbarAli\LaravelCustomHelper\Facades\LaravelCustomHelper;
use RanjbarAli\LaravelCustomHelper\Commands\MakeCustomHelperCommand;

class LaravelCustomHelperServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot(): void
    {
        if ($this->app->runningInConsole()) {
            $this->bootForConsole();
        }
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register(): void
    {
        $this->mergeConfigFrom(__DIR__.'/../config/laravel-custom-helper.php', 'laravel-custom-helper');

        // Register the service the package provides.
        $this->app->singleton('laravel-custom-helper', function ($app) {
            return new LaravelCustomHelper;
        });

        $helperDir = app_path( config('laravel-custom-helper.directory') );
        foreach ( glob( "$helperDir/*.php" ) as $helper ):
            if (File::exists($helper))
                require_once($helper);
        endforeach;
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['laravel-custom-helper'];
    }

    /**
     * Console-specific booting.
     *
     * @return void
     */
    protected function bootForConsole(): void
    {
        // Publishing the configuration file.
        $this->publishes([
            __DIR__.'/../config/laravel-custom-helper.php' => config_path('laravel-custom-helper.php'),
        ], 'laravel-custom-helper.config');
         $this->commands([
             MakeCustomHelperCommand::class
         ]);
    }
}
