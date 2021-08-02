<?php

use App\Controllers\HomeController;
use App\Controllers\CategorieController;

use App\Models\CoursGestion;

  use telesign\sdk\messaging\MessagingClient;
  use function telesign\sdk\util\randomWithNDigits;


	$app->get('/',function($request,$response,$args){
		return "Cool Burkina Faso";
	});


$app->post('/create_cours', function ($request, $response, $args) {
    
    $user = $request->getParsedBody();

    $name=$user['nom_enseignant'];
    $filiere=$user['filiere'];
    $classe=$user['classe'];
    
    $matiere=$user['matiere'];
    $vh=$user['vh'];

    $req=CoursGestion::create([
        'nom_enseignant'=>$name,
        'filiere'=>$filiere,
        'matiere'=>$matiere,
        'classe'=>$classe,
        'vh'=>$vh,
    ]);

    $data=$req;

    if($data){

        return $this->response->withJson(['status'=>'ok','user'=>$data]);
    }
    else
        return $this->response->withJson("rien");
});





// REGISTER DE L'APPLICATION
$app->get('/get_all_cours', function ($request, $response, $args) {
    
    $cours=CoursGestion::all();

    return $this->response->withJson($cours);
});



//MODIFIER COURS


$app->post('/modifier_cours', function ($request, $response, $args) {
    


    $req = $request->getParsedBody();
    $nom_prof=$req['nom_enseignant'];
    
    
    $id=$req['id_cours'];
    
    $filiere=$req['filiere'];
    $vh=$req['vh'];
    $classe=$req['classe'];
    
    $matiere=$req['matiere'];
    
    $cours=CoursGestion::where('id',$id);

    if($cours){
        $cours->update([
            'vh' => $vh,
            'filiere' => $filiere,
            'classe' => $classe,
            'matiere'=>$matiere
        ]);

        if($cours)
                
            return $this->response->withJson("modifié avec succès");
            
            else
                return $this->response->withJson('Aucun resultat trouvé');

    }
         
    

});






$app->post('/supprimer_cours', function ($request, $response, $args) {
    


    $req = $request->getParsedBody();
    $id=$req['id_cours'];
    
    $cours=CoursGestion::where('id',$id);

    if($cours){
        $cours=$cours->delete();
        
        echo json_encode("supprimé");

    }
         
    

});



$app->post('/supprimer_tous', function ($request, $response, $args) {
    

    $cours=CoursGestion::truncate();

    if($cours){
        
        echo json_encode("tous les cours sont supprimés");

    }
         
    

});



