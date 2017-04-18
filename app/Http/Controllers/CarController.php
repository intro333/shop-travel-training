<?php

namespace App\Http\Controllers;

use App\Services\Cars\Car;
use App\Services\Cars\Jeep;

class CarController extends Controller
{
    public function index(Car $car)
    {
//        $app = \App::make('Jeep');
//        $app = app()->make('Jeep');
        dd($car->refuel(1));
    }
}
