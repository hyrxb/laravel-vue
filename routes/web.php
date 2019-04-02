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


Route::get('/','AppController@getApp');

Route::get('/page','AppController@getPage');


Route::match(['get', 'post'],'/home/add','HomeController@add');


Route::get('/home/index','HomeController@index');

Route::post('/home/upload','HomeController@upload');

Route::get('/home/search','HomeController@search');
Route::get('/home/search_all','HomeController@search_all');


Route::get("/mp/list","MpController@index");

Route::get("/mp/add","MpController@add");
Route::get("/mp/dashboard","MpController@dashboard");
Route::get("/mp/menu","MpController@menu");

Route::post("/mp/upload","MpController@upload");
Route::post("/mp/logo","MpController@logo");


