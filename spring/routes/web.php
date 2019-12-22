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
//メインページ
Route::get('/', 'ShopsController@get_shop_name');
Route::get('/shop/list', 'ShopsController@list');
Route::get('/shop/new', 'ShopsController@new');
Route::post('/shop/new', 'ShopsController@new_post');

Route::get('/sainin', 'UsersController@sainin');
Route::get('/sample_shop_day', 'ShopsController@sample_shop_day');

Route::get('/create_user', 'UsersController@create_login');
Route::post('/create_user', 'UsersController@create_user');
Route::put('/create_user', 'UsersController@update');
Route::get('/my_page',function(){
    return view('my_page');
});
Route::get('/login', 'UsersController@login');
Route::get('/login2', 'UsersController@login2');
Route::post('/login_user', 'UsersController@login_user');
Route::get('/shop/details/{id}', 'ShopsController@details');

Route::get('/shops/list', 'ShopsController@list');
//空室確認予約画面
Route::get('/shop/days/{id}', 'ShopsController@days');
//Route::get('/shops/list/day', 'ShopsController@day');
