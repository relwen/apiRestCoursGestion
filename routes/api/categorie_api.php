<?php
// get all categories
use App\Models\Categorie;

	$app->get('/categories', function ($request, $response, $args) {
	    $categories = Categorie::all();
	    return $this->response->withJson($categories);
	});


// Retrieve categories by id 
	$app->get('/categories/[{id_categorie}]', function ($request, $response, $args) {
		$categorie = Categorie::find($args['id_categorie']);
	       return $this->response->withJson($categorie);
	});


	// Add a new categorie
	$app->post('/categories', function ($request, $response) {
             $input = $request->getParsedBody();
             $categorie = Categorie::create(['categorie' => $input['categorie']]);
	    return $this->response->withJson($categorie);
	});


	// DELETE a categorie with given id
	$app->delete('/categories/[{id}]', function ($request, $response, $args) {	 
            $categories = Task::destroy($args['id']);
	    return $this->response->withJson($categories);
	});


	// Update todo with given id
	$app->put('/categories/[{id}]', function ($request, $response, $args) {
        $input = $request->getParsedBody();

        $categories = Categorie::find($args['id']);
        $categories->categories = $input['categories'];
        $categories->save();
       
	    return $this->response->withJson($categories);
	});


