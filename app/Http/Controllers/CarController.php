<?php

namespace App\Http\Controllers;

class CarController extends Controller
{
    public function index()
    {
//        $app = \App::make('Jeep');
        $app = app()->make('Nissan');
        dd($app->refuel(1));
    }
}
