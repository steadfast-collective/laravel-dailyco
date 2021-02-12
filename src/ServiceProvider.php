<?php

namespace SteadfastCollective\LaravelDailyco;

use Illuminate\Support\ServiceProvider as BaseServiceProvider;

class ServiceProvider extends BaseServiceProvider
{
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../config/daily.php' => config_path('daily.php'),
        ], 'laravel-daily-config');

        $this->mergeConfigFrom(__DIR__.'/../config/daily.php', 'daily');
        
        $this->app->booted(function () {
            $this->app->bind('Laravel_Dailyco', function () {
                return new Daily;
            });
        });
    }

    public function register()
    {
        //
    }
}
