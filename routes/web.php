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

Route::prefix('/login')->group(function(){
    Route::get('index','Login@index');
    Route::get('add','Login@add');
    Route::any('doadd','Login@doadd');
    Route::any('dladd','Login@dladd');
    Route::any('dodladd','Login@dodladd');
});

Route::prefix('/goods')->group(function(){
    Route::get('add','admin\Goods@add');
    Route::any('doadd','admin\Goods@doadd');
});


