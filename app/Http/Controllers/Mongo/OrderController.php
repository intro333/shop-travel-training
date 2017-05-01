<?php

namespace App\Http\Controllers\Mongo;

use App\MongoModels\Category;
use App\MongoModels\Product;
use App\MongoModels\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class OrderController extends Controller
{
    public function index()
    {
//        $user = User::where('email', '=', 'dima@mail.ru')->get();
//        $category = Category::create(['name' => 'John3']);
        $category = Category::with('products')->first();
        //Добавить в первый документ вложенный документ
        $products = new Product([
            "name"=> "курица",
            "price"=> "250",
            "image_path"=> "/images/meatorchicken/chicken.jpg",
            "is_active"=> 1
        ]);
        $category->products()->save($products);
//        $category = new Category;
//        $category->name = 'John';
//        $category->save();
        dd($category->products);
    }

}
