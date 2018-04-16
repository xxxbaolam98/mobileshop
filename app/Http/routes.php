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

Route::get('/', function () {
    return view('welcome');
});

Route::get('index',[
  'as'=>'trang-chu','uses'=>'PageController@getIndex'
]);

Route::get('home',[
  'as'=>'home','uses'=>'PageController@getHome'
]);

Route::get('product/{type}',['as'=>'product','uses'=>'PageController@getProduct']);

Route::get('contact',['as'=>'contact','uses'=>'PageController@getContact']);

Route::get('signup',['as'=>'signup','uses'=>'PageController@getSignup']);

Route::get('login',['as'=>'login','uses'=>'PageController@getLogin']);

Route::get('news',['as'=>'news','uses'=>'PageController@getNews']);

Route::get('detail/{id}',['as'=>'detail','uses'=>'PageController@getDetail']);

Route::get('cart',['as'=>'cart','uses'=>'PageController@getCart']);