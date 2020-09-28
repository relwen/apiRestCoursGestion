<?php

	use App\Models\Article;

$app->get('/articles', function ($request, $response, $args) {
	    $articles = Article::all();
	    return $this->response->withJson($articles);
	});


// Retrieve categories by id 
	$app->get('/articles/[{id}]', function ($request, $response, $args) {
		$article = Article::where('id_article',$args['id'])->get();
	       return $this->response->withJson($article);
	});

// RETOUVER LES ARTICLES RECENTS 
	$app->get('/recents', function ($request, $response) {
		$recents = Article::limit(10)->get();
	       return $this->response->withJson($recents);
	});


// RETOUVER LES ARTICLES PAR CATEGORIE 
	$app->get('/catArticle', function ($request, $response) {
		$recents = Article::limit(10)->get();
	       return $this->response->withJson($recents);
	});


	// Add a new categorie
	$app->post('/articles', function ($request, $response) {
             $input = $request->getParsedBody();
             $article = Article::create(['article' => $input['article']]);
	    return $this->response->withJson($article);
	});


	// DELETE a categorie with given id
	$app->delete('/article/[{id}]', function ($request, $response, $args) {	 
            $articles = Article::destroy($args['id']);
	    return $this->response->withJson($articles);
	});


	// Update todo with given id
	$app->put('/articles/[{id}]', function ($request, $response, $args) {
        $input = $request->getParsedBody();

        $articles = Article::find($args['id']);
        $articles->article = $input['categories'];
        $articles->save();
       
	    return $this->response->withJson($articles);
	});

