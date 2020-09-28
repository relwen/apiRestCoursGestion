<?php

use App\Controllers\HomeController;
use App\Controllers\CategorieController;
use App\Models\Categorie;

// $app->get('/', HomeController::class . ':index')->setName( 'home' );


	$app->get('/',function($request,$response,$args){
		return "Cool Burkina Faso";
	});

// $app->get('/categories', function ($request, $response, $args) {
//     $categories = Categorie::all();
//     return $this->response->withJson($categories);
// });
