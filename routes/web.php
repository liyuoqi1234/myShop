<?php

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
    return view('index');
});

Route::prefix('/user')->middleware('user')->group(function(){
    Route::get('index','userController@index');
    Route::get('add','userController@add');
    Route::any('do_add','userController@do_add');
    Route::any('del/{id}','userController@del');
    Route::any('edit/{id}','userController@edit');
    Route::any('update/{id}','userController@update');
});
// 后台登录
Route::prefix('/login')->group(function(){
    Route::get('index','Login@index');
    Route::get('add','Login@add');
    Route::any('doadd','Login@doadd');
    Route::any('dladd','Login@dladd');
    Route::any('dodladd','Login@dodladd');
});


// 周考测试
Route::prefix('/good')->group(function(){
    Route::get('add','admin\Good@add');
    Route::any('doadd','admin\Good@doadd');
    Route::any('index','admin\Good@index');
    Route::any('del/{id}','admin\Good@del');
    Route::any('edit/{id}','admin\Good@edit');
    Route::any('update/{id}','admin\Good@update');
});

// 前台
Route::prefix('/')->group(function(){
    Route::get('/', 'Index\IndexController@index');
    Route::get('/login', 'Index\LoginController@login');
    Route::any('/index/dologin', 'Index\LoginController@dologin');
    Route::get('/register', 'Index\RegisterController@register');
    Route::any('/doregister', 'Index\RegisterController@doregister');
    Route::any('/wishlist', 'Index\IndexController@wishlist');

});

// 商品列表
Route::prefix('/goods')->group(function(){
    Route::any('index','admin\GoodsController@index');
    Route::get('add','admin\GoodsController@add');
    Route::any('doadd','admin\GoodsController@doadd');
    Route::any('del/{id}','admin\GoodsController@del');

});

// 周考4
Route::prefix('/zhk4')->group(function(){
    Route::any('index','admin\UserController@index');
    Route::any('add','admin\UserController@add');
    Route::any('doadd','admin\UserController@doadd');
    Route::get('del/{id}','admin\UserController@del');
    Route::get('edit/{id}','admin\UserController@edit');
    Route::any('update/{id}','admin\UserController@update');
});



