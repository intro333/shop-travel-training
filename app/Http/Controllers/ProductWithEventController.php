<?php

namespace App\Http\Controllers;

use App\Events\OrderWasChosen;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Requests;

class ProductWithEventController extends Controller
{
    public function sendOrder($id)
    {
        $product = Product::find($id);
        event(new OrderWasChosen($product));
    }
}
