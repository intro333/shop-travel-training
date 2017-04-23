<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
//Route::group(array('middleware' => 'cors'), function () {
    Route::post('/sessionAddProduct',
        array('as' => 'session_add_product',
            'uses' => 'Api\OrderApiController@sessionAddProduct'));
//});

Route::group(['prefix' => 'products'], function () {
    Route::get('/', ['as' => 'products.index', 'uses' => 'ProductsController@index']);
    Route::get('/collection', ['as' => 'products.collection', 'uses' => 'ProductsController@collection']);
});
//Префикс для теста вёрстки
Route::group(['prefix' => 'layout'], function () {
    Route::get('/meat-and-chicken', ['as' => 'layout.meat-and-chicken', 'uses' => 'LayoutController@meatAndChicken']);
    Route::post('/add-product', ['as' => 'layout.add-product', 'uses' => 'LayoutController@addProduct']);
});


Route::get('/service-container', function () {
//    $class = new ReflectionClass(\App\Http\Kernel::class);
//
//    foreach ($class->getConstructor()->getParameters() as $parameter) {
//        dump($parameter->getClass());
//    }
    class A {}
    class B {
        private $a;
        public function __construct(A $a)
        {
            $this->a = $a;
        }
    }
    $container = new \Illuminate\Container\Container();
    $container->singleton('a', A::class);
    $container->singleton('b', B::class);
//    dd($container->make('a'),  $container->make('b'));//Будут разные объекты А
    dd($container->make('a'),  $container->make('b', ['a' => $container->make('a')]));//Объект А будет один и тот же
});

Route::get('/car', ['as' => 'car.index', 'uses' => 'CarController@index']);
//Route::get('/send_order/{id}', ['as' => 'with_event.index', 'uses' => 'ProductWithEventController@sendOrder']);
Route::get('/send_order/{id}', ['as' => 'with_event.index', 'uses' => 'OrderWithRealizationController@sendOrder']);
Route::get('/sessionSetProduct/{id}', ['as' => 'session_set_product', 'uses' => 'Api\OrderApiController@sessionSetProduct']);

