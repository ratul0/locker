<?php

// for guest only
Route::group(array('before' => 'guest'), function()
{

	Route::get('login', array('as' => 'login', 'uses' => 'UserController@login'));
	Route::post('login', array('uses' => 'UserController@doLogin'));
	Route::get('register', array('as' => 'register', 'uses' => 'UserController@register'));
	Route::post('register', array('uses' => 'UserController@doRegister'));
});

// for any logged in user
Route::group(array('before' => 'auth'), function()
{
	
	Route::get('logout', array('as' => 'logout', 'uses' => 'UserController@logout'));
});

// for user
Route::group(array('before' => 'auth|user'), function()
{
	
});


// for admin
Route::group(array('before' => 'auth|admin'), function()
{
	Route::get('home', array('as' => 'home', 'uses' => 'UserController@home'));
	Route::get('areas', array('as' => 'area.index', 'uses' => 'AreasController@index'));
	Route::get('area/create', array('as' => 'area.create', 'uses' => 'AreasController@create'));
	Route::post('area/create', array('as' => 'area.create', 'uses' => 'AreasController@store'));
	Route::get('area/edit/{id}', array('as' => 'area.edit', 'uses' => 'AreasController@edit'));
	Route::put('area/edit/{id}', array('as' => 'area.edit', 'uses' => 'AreasController@update'));
	Route::get('area/delete/{id}', array('as' => 'area.delete', 'uses' => 'AreasController@delete'));
});



// public pages [ keep them at last]
Route::get('/', array('as' => 'guest', 'uses' => 'UserController@guest'));