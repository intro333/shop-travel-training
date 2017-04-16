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
        $this->app->bind('App\Services\Mailers\MailerInterface', 'App\Services\Mailers\Mailer');
    }
}
