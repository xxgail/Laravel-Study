<?php

use \Illuminate\Support\Facades\App;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::any('/test','TestController@test');

Route::any('/test2','TestController@test2');


Route::any('/test3/{locale}','TestController@test3');

Route::get('/welcome/{locale}', function ($locale) {
    App::setLocale($locale);
    echo trans('message.welcome');
});

Route::any('/student','TestController@student');

Route::group([
    'namespace' => 'Home',
    'prefix' => 'home',
], function(\Illuminate\Routing\Router $router){
   $router->any('language','LangController@language')->name('home.language');
});