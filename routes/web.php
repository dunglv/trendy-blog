<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', [
	'as' => 'ui.home',
	'uses' => 'GeneralController@index'
	]);
Route::get('/breaking', [
	'as' => 'ui.breaking',
	'uses' => 'GeneralController@breaking'
	]);
Route::get('/events', [
	'as' => 'ui.events',
	'uses' => 'GeneralController@events'
	]);
Route::get('/entertainment', [
	'as' => 'ui.entertainment',
	'uses' => 'GeneralController@entertainment'
	]);
Route::get('/contact-us', [
	'as' => 'ui.contact',
	'uses' => 'GeneralController@contact'
	]);