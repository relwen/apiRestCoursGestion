<?php

	use App\Models\Livraison;

$app->get('/livraisons', function ($request, $response, $args) {
	    $livraison = Livraison::all();
	    return $this->response->withJson($livraison);
	});


// Get one details on livraisons
	$app->get('/livraisons/[{id}]', function ($request, $response, $args) {
		$livraison = Livraison::find($args['id']);
	       return $this->response->withJson($livraison);
	});


	// Add a new Livraisons
	$app->post('/livraisons', function ($request, $response) {
             $input = $request->getParsedBody();
             $client = Livraison::create(['client' => $input['client']]);
	    return $this->response->withJson($client);
	});


	// DELETE a livraisons
	$app->delete('/livraisons/[{id}]', function ($request, $response, $args) {	 
            $livraison = Livraison::destroy($args['id']);
	    return $this->response->withJson($livraison);
	});


// Pas de update prévu pour la livraison

