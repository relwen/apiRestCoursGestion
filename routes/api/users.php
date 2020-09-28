<?php


	use App\Models\User;

	$app->post('/users', function ($request, $response, $args) {
	    $users_exist = User::all();
	    return $this->response->withJson($users_exist);
	});



?>