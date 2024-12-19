<?php

namespace SteadfastCollective\LaravelDailyco;

use Illuminate\Support\ServiceProvider as BaseServiceProvider;

class ServiceProvider extends BaseServiceProvider
{
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/daily.php', 'daily');

        $this->app->singleton('Laravel_Dailyco', function ($app) {
            return new Daily($app['config']['daily']);
        });
    }

    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../config/daily.php' => config_path('daily.php'),
            ], 'laravel-daily-config');
        }
    }
}
