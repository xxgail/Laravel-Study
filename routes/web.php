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

Route::any('/test2','TestController@test2')->name('test2');


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

Route::group([
    'namespace' => 'Admin',
    'prefix' => 'login',
],function (\Illuminate\Routing\Router $router){
    $router->any('login','LoginController@login')->name('login.login');
});

Route::group([
    'middleware' => 'adminLoginAuth',
],function(){
    Route::group([
        'namespace' => 'Admin',
        'prefix' => 'admin',
    ],function (\Illuminate\Routing\Router $router){
        $router->any('list','AdminController@list')->name('admin.list');
        $router->any('add','AdminController@add')->name('admin.add');
    });


    Route::group([
        'namespace' => 'Admin',
        'prefix' => 'role',
    ],function (\Illuminate\Routing\Router $router){
        $router->any('list','RoleController@list')->name('role.list');
        $router->any('add','RoleController@add')->name('role.add');
        $router->any('edit/{id?}','RoleController@edit')->name('role.edit');
    });

    Route::group([
        'namespace' => 'Admin',
        'prefix' => 'permission',
    ],function (\Illuminate\Routing\Router $router){
        $router->any('list','PermissionController@list')->name('permission.list');
        $router->any('add','PermissionController@add')->name('permission.add');
    });


    Route::group([
        'namespace' => 'Student',
        'prefix' => 'student',
    ],function (\Illuminate\Routing\Router $router){
        $router->any('list','StudentController@list');
        $router->any('add','StudentController@add');
    });
});

