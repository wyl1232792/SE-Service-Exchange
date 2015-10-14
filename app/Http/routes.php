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

Route::get('/', 'HomeController@index');
Route::get('goods/search', 'HomeController@index');

Route::get('/login', 'Auth\AuthController@getLogin');
Route::post('/login', 'Auth\AuthController@postLogin');
Route::get('/logout', 'Auth\AuthController@logout');
Route::get('signup', 'HomeController@signup');
Route::post('/signup', 'Auth\AuthController@signup');
Route::get('/jaccount', 'Auth\JAuthController@login');
Route::get('/jalogout', 'Auth\JAuthController@logout');

Route::get('/goods/{id}/detail', 'GoodsController@show')->where('id', '[0-9]+');
Route::get('/profile/{id}', 'UserController@show')->where('id', '[0-9]+');

Route::group(['middleware' => 'auth'], function() {
	Route::get('home', 'HomeController@showProfile');
	Route::get('profile/edit', 'HomeController@editProfile');
	Route::post('profile/edit', 'UserController@editCurrentUser');
	Route::get('listGoods', 'HomeController@listGoods');
	Route::get('goods/{id}/edit', 'HomeController@editGoods')->where('id', '[0-9]+');
	Route::post('goods/list', 'GoodsController@create');
	Route::post('goods/{id}/edit', 'GoodsController@edit')->where('id', '[0-9]+');
	Route::post('goods/{id]/delete', 'GoodsController@delete')->where('id', '[0-9]+');
	Route::post('goods/{id}/trade', 'GoodsController@trade')->where('id', '[0-9]+');
	Route::post('goods/{id}/quote', 'GoodsController@quote')->where('id', '[0-9]+');
	Route::get('goods/{id}/mark', 'GoodsController@mark')->where('id', '[0-9]+');
	
	Route::group(['middleware' => 'auth.basic'], function() {
		Route::post('upgrade', 'UserController@upgrade');
	});

	Route::group(['middleware' => 'auth.advanced'], function() {
		//这里是认证用户的内容，可以开店和挂牌快速成交，一期开发就没有了
	});

});

Route::group(['middleware' => 'auth.admin'], function() {
	//这个也暂时不在一期开发，否则会累死
});