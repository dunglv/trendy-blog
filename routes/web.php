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

/********************************************************
 * ADMIN MANAGER
 *
 * @package default
 * @author 
 ********************************************************/
Route::group(['prefix' => 'admin', 'middleware' => 'auth_admin:admin,user'], function() {
    Route::get('/', [
    	'as' => 'ad.home',
    	'uses' => 'AdminController@index'
    	]);
    Route::get('/login', [
    	'as' => 'ad.login',
    	'uses' => 'AdminController@getLogin'
    	]);
    
});

/******************************************************
 * Separate route to multi route to manage
 * Path: own-route
 * Route: list route
 ******************************************************
 * @return void
 * @author 
 **/
foreach ((File::allFiles(__DIR__.'/own-route')) as $f) {
    if (file_exists($f->getPathName())) {
        require_once $f->getPathName();
    }
}

/********************************************************
 * FRONT MANAGER
 *
 * @package default
 * @author 
 ********************************************************/
Route::get('/register', [
	'as' => 'ui.user.register',
	'uses' => 'UserController@get_register'
	]);
Route::post('/register', [
	'as' => 'ui.user.post_register',
	'uses' => 'UserController@post_register'
	]);
Route::get('/register-success', [
    'as' => 'ui.user.success_register',
    'uses' => 'UserController@success_register'
    ]);
Route::get('/login', [
	'as' => 'ui.user.login',
	'uses' => 'UserController@get_login'
	]);
Route::post('/login', [
	'as' => 'ui.user.post_login',
	'uses' => 'UserController@post_login'
	]);
Route::get('/logout', [
    'as' => 'ui.user.logout',
    'uses' => 'UserController@logout'
    ]);
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
Route::get('/single', [
    'as' => 'ui.detail',
    'uses' => 'GeneralController@single'
    ]);

// Auth::routes();

// Route::get('/home', 'HomeController@index');
