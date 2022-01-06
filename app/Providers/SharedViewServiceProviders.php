<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class SharedViewServiceProviders extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $data=array();
        $data['a']=10;
        $data['currency']='$';
        view()->share('number', $data);
    }
}
