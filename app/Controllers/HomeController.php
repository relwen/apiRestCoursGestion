<?php

namespace App\Controllers;

use App\Controllers\Controller;
use App\Models\Categorie;
use App\Models\Article;
use Psr\Http\Message\{
    ServerRequestInterface as Request,
    ResponseInterface as Response
};

class HomeController extends Controller
{
    public function index(Request $request, Response $response, $args)
    {
        $categories=Categorie::all();
        $articles=Article::leftJoin('categories', function($join)
                         {
                             $join->on('categorie', '=', 'categories.id_categorie');
                             
                         })->where('stock_article','>',0)->get();

        return $this->c->view->render($response, 'home/index.twig', [
            'categories' => $categories,
            'articles' => $articles,
        ]);


    }
}
