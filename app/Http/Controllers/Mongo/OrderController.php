<?php

namespace App\Http\Controllers\Mongo;

use App\MongoModels\Category;
use App\MongoModels\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class OrderController extends Controller
{
    public function index()
    {
//        $user = User::where('email', '=', 'dima@mail.ru')->get();
        $category = Category::create(['name' => 'John3']);
//        $category = new Category;
//        $category->name = 'John';
//        $category->save();
        dd($category);
    }

}
