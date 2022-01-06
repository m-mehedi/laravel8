<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        app()->bind('first_service_helper', function($app){
            dd("First service container");
        });
        app()->bind('second_service_helper', function($app){
            dd("second service container");
        });
        app()->bind('third_service_helper', function($app){
            dd("Third service container");
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
