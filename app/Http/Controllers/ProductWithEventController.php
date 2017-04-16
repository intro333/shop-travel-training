<?php

namespace App\Http\Controllers;

use App\Events\OrderWasChosen;
use App\User;
use Illuminate\Http\Request;
use App\Http\Requests;

class ProductWithEventController extends Controller
{
    public function sendOrder($id)
    {
        $user = User::find($id);
        event(new OrderWasChosen($user));
    }
}
