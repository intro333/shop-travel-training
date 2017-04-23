<?php

namespace App\Http\Controllers\Api;

use App\Protobuf\Php\Build\Order\AddProduct;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class OrderApiController extends Controller
{

    public function __construct()
    {
        $this->middleware('cors');

//        $this->middleware('log')->only('index');
//
//        $this->middleware('subscribed')->except('store');
    }

    //flash
    public function sessionSetProduct($id)
    {
//        $addProduct = new AddProduct();//Todo Так и не добил протобаф
//        $addProduct->setBody("2");//Todo Так и не добил протобаф
//        dd($addProduct->getBody());//Todo Так и не добил протобаф

        //Добавление элемента к переменной-массиву
//        Session::push('user.fuck', 'developers');
        //Переназначение элемента(удаление значений массива)
//        Session::put('user', []);
//        Session::save();
        //Записать данные в сессию только на текущий запрос
//        Session::flash('key', 'value');
//        $session = Session::get('user');
        //Для добавления, удаления значений в сессиях можно создать трейт, и передавать ему значения.И решить где будет происходить сохранение заказа
        $session = Session::all();
        dd($session);
    }

    public function sessionAddProduct()
    {
        return \Response::json(['status' => 'ok'], 200, [
            'Content-Type'                     => 'application/json; charset=UTF-8',
            'charset'                          => 'utf-8',
            'Access-Control-Allow-Origin'      => '*',
            'Access-Control-Allow-Credentials' => 'true'
        ], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
    }
}
