<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->group(['prefix'=>'community'], function() use($router){

	// public view url
	$router->group(['prefix'=>'information'], function() use($router){
		$router->get('/', 'user\InformationController@index');
		$router->get('category/{category}', 'PublicController@groupBy');
		$router->post('search/{value}', 'PublicController@search');
	});
<<<<<<< HEAD

	//products url group
	$router->group(['prefix'=>'manage/information', 'middleware'=>'auth'], function() use($router){
		// $router->get('/', 'Information\InformationController@index');
		$router->get('view/{id}', 'Information\InformationController@view');
		$router->post('add', 'Information\InformationController@store');
		$router->delete('delete/{id}', 'Information\InformationController@destroy');
		$router->post('status', 'Information\InformationController@paymentStatus');
=======
	
	//products url group 
	// $router->group(['prefix'=>'manage/information', 'middleware'=>'auth'], function() use($router){
	$router->group(['prefix'=>'manage/information'], function() use($router){
		$router->get('/', 'Information\InformationController@index');
		$router->post('/', 'Information\InformationController@create');
		$router->get('/category', 'Information\InformationController@getCategory');
		$router->get('view/{id}', 'Information\InformationController@view');
		$router->post('add', 'Information\InformationController@store');
		$router->delete('delete/{id}', 'Information\InformationController@destroy');
		$router->post('edit/{information}', 'Information\InformationController@update');

>>>>>>> 8d10b50690877690f67da1cc7ed69fb603926b7e
	});

	//users url group
	$router->group(['prefix'=>'manage'], function() use($router){
		$router->get('', 'UserController@index');
		$router->post('add', 'UserController@registerUser');
		$router->post('login', 'UserController@login');
		$router->post('logout', 'UserController@logout');
	});

	//libray url information
	$router->group(['prefix'=>'libray'], function() use($router){
		
	});

});
