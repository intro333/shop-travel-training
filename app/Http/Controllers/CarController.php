<?php

namespace App\Http\Controllers;

class CarController extends Controller
{
    public function index()
    {
        $app = \App::make('Jeep');
        dd($app->refuel(1));
    }
}
