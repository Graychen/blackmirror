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

Route::get('/',['as'=>'base'],function () {
    Session::flash('','');
    Session::reflash();

    return Redirect::to('pages/home');
});
Route::get('home/index', 'Home\HomeController@index');

Route::get('goods/index','Home\GoodsController@index');

Route::get('goods/paginate','Home\GoodsController@paginate');

