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

Route::get('/',[
	'uses' => 'ProductController@getIndex','as' => 'product.index'
]);

Route::get('/signup',[
	'uses' => 'UserController@getSignup','as' => 'user.signup'
]);

Route::post('/signup',[
	'uses' => 'UserController@postSignup','as' => 'user.signup'
]);
