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
    return view('welcome');
});

//Auth::routes();
Auth::routes(['verify' => true]); // Auth::routes();の部分をこのように変更

Route::get('/home', 'HomeController@index')->name('home');

Route::middleware('verified')->group(function() {
    // 本登録ユーザーだけ表示できるページ
    Route::get('verified',  function(){
        return '本登録が完了してます！';
    });
});