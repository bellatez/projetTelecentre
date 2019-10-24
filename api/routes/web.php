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

$api = app('Dingo\Api\Routing\Router');

$api->version('v1', function() use($api){
	$api->group(['prefix' => 'oauth'], function() use($api){
		$api->post('tokens', '\Laravel\Passport\Http\Controllers\AccessTokenController@issueToken');
	});
});

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->group(['prefix'=>'community'], function() use($router){

	// public view url
	$router->group(['prefix'=>'information'], function() use($router){
		$router->get('/', 'user\InformationController@index');
		$router->get('/calendar', 'user\InformationController@activities');
		$router->get('/activity', 'user\InformationController@activity');
		$router->get('/{category}', 'user\InformationController@infoCat');

		$router->get('category/{category}', 'PublicController@groupBy');
		$router->post('search/{value}', 'PublicController@search');

	});

	//products url group

		$router->get('commerce', 'user\ProductController@index');
		$router->post('commerce', 'user\ProductController@create');

	$router->group(['prefix'=>'manage/information', 'middleware'=>'auth'], function() use($router){	
	// $router->group(['prefix'=>'manage/information'], function() use($router){
		$router->get('/', 'Information\InformationController@index');
		$router->post('/', 'Information\InformationController@create');
		$router->get('/category', 'Information\InformationController@getCategory');
		$router->get('view/{id}', 'Information\InformationController@view');
		$router->post('add', 'Information\InformationController@store');
		$router->post('delete/{id}', 'Information\InformationController@destroy');
		$router->get('edit/{id}', 'Information\InformationController@edit');
		$router->post('update/{id}', 'Information\InformationController@update');

	});

	//users url group
	$router->group(['prefix'=>'manage'], function() use($router){
		$router->get('', 'UserController@index');
		$router->post('add', 'UserController@registerUser');
		$router->post('login', 'UserController@login');
		$router->post('logout', 'UserController@logout');
		$router->get('users', 'Dashboard\DashboardController@index');
	});


	// all the links for the library //////
	$router->group(['prefix'=>'library'], function() use($router){

		$router->group(['prefix'=>'livres'], function() use($router){
			$router->get('index', 'library\livres\BooksController@index');
			$router->get('create', 'library\livres\BooksController@create');
			$router->post('store', 'library\livres\BooksController@store');
			$router->get('show/{id}', 'library\livres\BooksController@show');
			$router->get('edit/{id}', 'library\livres\BooksController@edit');
			$router->put('update/{books}/{id}', 'library\livres\BooksController@update');
		});
			// all the links for the categories //////
		$router->group(['prefix'=>'categories'], function() use($router){
			$router->get('index', 'library\livres\CategoriesController@index');
			$router->get('create', 'library\livres\CategoriesController@create');
			$router->post('store', 'library\livres\CategoriesController@store');
			$router->get('show/{id}', 'library\livres\CategoriesController@show');
			$router->get('edit/{id}', 'library\livres\CategoriesController@edit');
			$router->put('update/{books}/{id}', 'library\livres\CategoriesController@update');
		});
			// all the links for the author //////
		$router->group(['prefix'=>'author'], function() use($router){
			$router->get('index', 'library\livres\AuthorsController@index');
			$router->get('create', 'library\livres\AuthorsController@create');
			$router->post('store', 'library\livres\AuthorsController@store');
			$router->get('show/{id}', 'library\livres\AuthorsController@show');
			$router->get('edit/{id}', 'library\livres\AuthorsController@edit');
			$router->put('update/{books}/{id}', 'library\livres\AuthorsController@update');
		});

			// all the links for the papers //////
		$router->group(['prefix'=>'epreuves'], function() use($router){
			$router->get('index', 'library\epreuves\EpreuvesController@index');
			$router->get('create', 'library\epreuves\EpreuvesController@create');
			$router->post('store', 'library\epreuves\EpreuvesController@store');
			$router->get('show/{id}', 'library\epreuves\EpreuvesController@show');
			$router->get('edit/{id}', 'library\epreuves\EpreuvesController@edit');
			$router->put('update/{books}/{id}', 'library\epreuves\EpreuvesController@update');
		});

		// all the links for the subjects //////
		$router->group(['prefix'=>'matieres'], function() use($router){
			$router->get('index', 'library\epreuves\MatieresController@index');
			$router->get('create', 'library\epreuves\MatieresController@create');
			$router->post('store', 'library\epreuves\MatieresController@store');
			$router->get('show/{id}', 'library\epreuves\MatieresController@show');
			$router->get('edit/{id}', 'library\epreuves\MatieresController@edit');
			$router->put('update/{books}/{id}', 'library\epreuves\MatieresController@update');
		});

			// all the links for the exams //////
		$router->group(['prefix'=>'examen'], function() use($router){
			$router->get('index', 'library\epreuves\ExamensController@index');
			$router->get('create', 'library\epreuves\ExamensController@create');
			$router->post('store', 'library\epreuves\ExamensController@store');
			$router->get('show/{id}', 'library\epreuves\ExamensController@show');
			$router->get('edit/{id}', 'library\epreuves\ExamensController@edit');
			$router->put('update/{books}/{id}', 'library\epreuves\ExamensController@update');
		});

	});

    $router->group(['prefix' => 'chat'], function () use ($router) {
        $router->get('index', [
            'as' => 'index', 'uses' => 'Communication\ChatController@index'
        ]);

        $router->get('message/{id}', [
            'as' => 'profile', 'uses' => 'Communication\ChatController@show'
        ]);

        $router->post('message/', [
            'as' => 'profile', 'uses' => 'Communication\ChatController@store'
        ]);
    });

});
