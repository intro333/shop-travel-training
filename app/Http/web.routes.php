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

Route::group(['prefix' => 'products'], function () {
    Route::get('/', ['as' => 'products.index', 'uses' => 'ProductsController@index']);
    Route::get('/collection', ['as' => 'products.collection', 'uses' => 'ProductsController@collection']);
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