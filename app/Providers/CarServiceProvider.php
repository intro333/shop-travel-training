<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class CarServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = true;//Todo Протестить вместе с методом provides()

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('Jeep', 'App\Services\Cars\Jeep');
        $this->app->bind('Nissan', 'App\Services\Cars\Nissan');
        $this->app->when('App\Services\Cars\Jeep')->needs('App\Services\Cars\Fuel')->give('App\Services\Cars\Petrol');
        $this->app->when('App\Services\Cars\Nissan')->needs('App\Services\Cars\Fuel')->give('App\Services\Cars\Diesel');
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['App\Services\Cars\Jeep', 'App\Services\Cars\Nissan'];
    }
}
