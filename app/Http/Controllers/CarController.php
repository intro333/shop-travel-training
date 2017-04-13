<?php

namespace App\Http\Controllers;

use App\Services\Cars\Jeep;

class CarController extends Controller
{
    public function index(Jeep $jeep)
    {
//        $app = \App::make('Jeep');
//        $app = app()->make('Jeep');
        dd($jeep->refuel(1));
    }
}
