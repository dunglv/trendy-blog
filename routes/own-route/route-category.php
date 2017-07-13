<?php
Route::group(['prefix' => 'admin', 'middleware' => 'auth_admin:admin,user'], function() {
	// +category
    Route::get('/categories', [
    	'as' => 'ad.c.index',
    	'uses' => 'CategoryController@index'
    	]);
    Route::get('/categories/create', [
    	'as' => 'ad.c.create',
    	'uses' => 'CategoryController@create'
    	]);
    Route::post('/categories/create', [
    	'as' => 'ad.c.store',
    	'uses' => 'CategoryController@store'
    	]);
    Route::get('/categories-pending', [
        'as' => 'ad.c.pending',
        'uses' => 'CategoryController@pending'
        ]);
    Route::get('/category/{id}/active', [
        'as' => 'ad.c.active',
        'uses' => 'CategoryController@active'
        ]);
    Route::get('/category/{id}/delete', [
        'as' => 'ad.c.delete',
        'uses' => 'CategoryController@delete'
        ]);
});