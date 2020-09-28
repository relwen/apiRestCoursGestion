<?php

	use App\Models\Client;

$app->get('/clients', function ($request, $response, $args) {
	    $clients = Client::all();
	    return $this->response->withJson($clients);
	});


// Retrieve categories by id 
	$app->get('/clients/[{id}]', function ($request, $response, $args) {
		$client = Client::find($args['id']);
	       return $this->response->withJson($client);
	});


	// Add a new categorie
	$app->post('/clients', function ($request, $response) {
             $input = $request->getParsedBody();
             $client = Client::create(['client' => $input['client']]);
	    return $this->response->withJson($client);
	});


	// DELETE a categorie with given id
	$app->delete('/client/[{id}]', function ($request, $response, $args) {	 
            $client = Client::destroy($args['id']);
	    return $this->response->withJson($client);
	});


	// Update todo with given id
	$app->put('/clients/[{id}]', function ($request, $response, $args) {
        $input = $request->getParsedBody();

        $clients = Client::find($args['id']);
        $clients->article = $input['clients'];
        $clients->save();
       
	    return $this->response->withJson($clients);
	});

