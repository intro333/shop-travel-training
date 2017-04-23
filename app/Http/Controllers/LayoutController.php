<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class LayoutController extends Controller
{
    public function __construct()
    {
        $this->middleware('cors');
    }

    public function meatAndChicken()
    {
        return \View::make('layout.meat-and-chicken', [
//            'products'  => $products
        ]);
    }

    public function addProduct(Request $request)
    {
        return \Response::json(['status' => 'ok', 'dat' => $request->all()], 200, [
            'Content-Type'                     => 'application/json; charset=UTF-8',
            'charset'                          => 'utf-8',
            'Access-Control-Allow-Origin'      => '*',
            'Access-Control-Allow-Credentials' => 'true'
        ], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
    }
}
