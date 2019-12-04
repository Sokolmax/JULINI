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
    return view('main');
});
Route::get('/reserve', "ClientsController@reserve");
Route::get('/order', "ClientsController@order");
Route::get('/send', "mailController@send");

Route::get('/menu', "MenuController@index");
Route::get('/menu/create', "MenuController@create");

Route::post('/reserve', "ClientsController@store");
Route::post('/menu', "MenuController@store");
