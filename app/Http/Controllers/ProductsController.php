<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductCategory;
use Illuminate\Http\Request;

use App\Http\Requests;

class ProductsController extends Controller
{
    public function __construct()
    {
       //
    }

    public function index()
    {
//        $products = clone $this->productScope->take(2)->get();

//        $products = $products->max('price');
//        $products = $products->count();

//        $products = Product::whereRaw('is_active = ? and name = ?', [1, 'Говядина'])->get();

//        Product::where('is_active', 1)->update(['name' => 'Говядина2']);

//        $products = Product::where('is_active', 0)->delete();

        //Выборка всех продуктов включая удалённые(мягкое удаление(
//        $products = Product::withTrashed()
//            ->where('is_active', 1)
//            ->get();
//        $products = Product::active()->categoryId(1)->get();
//        $products = ProductCategory::find(1);
//        $products = $products->products;
//        $products = ProductCategory::has('products')->get();
//        $products = ProductCategory::whereHas('products', function ($q) {
//            $q->where('image_path', 'like', '%beef%');
//        })->get();
//        $products = Product::with(['category' => function ($query)
//        {
//            $query->where('category_id', 1);
//        }])->get();
//        foreach ($products as $product) {
//            dd($product->category->name);
//        }
//        $products = ProductCategory::all();
////        $products->load('products');
//        $products->load(['products' => function ($query) {
//            $query->where('price', 800);
//        }]);
//        dd($products);
        /*Создание связанной модели*/
//        $products = [
//            new Product([
//                'name'       => 'курица',
//                'price'      => '250',
//                'image_path' => '/image/chicken.jpg',
//                'is_active'  => 1,
//            ]),
//        ];
//        $category = ProductCategory::find(1);
//        $category->products()->saveMany($products);
//        dd($category);
        /*Читатели и преобразователи*/
        /*см. модель Product, getNameAttribute и setNameAttribute*/
//        dd($products[0]->created_at->format('d-m-Y'));
        /*Преобразование в массив--------------------------------*/
        $products = Product::find(1);
        $features = $products->features;
        $features["image_path"] = "/image/beef2.jpg";
        $products->features = $features;
        $products->save();
        dd($products->features);

        /*Коллекции*/


        return \View::make('main.products.index', [
            'products'  => $products
        ]);
    }
}
