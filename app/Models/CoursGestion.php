<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
/**
 * Class Article permet d'enregistrer 
 * des produits dans notre boutique en ligne
 */
class CoursGestion extends Model
{



    public $timestamps=false;
	public $table = 'gestion_cours';
    protected $fillable =[
    					'id',
					   	'nom_enseignant',
					   	'filiere',
					   	'classe',
   					   	'matiere',
					   	'vh',
					   	'statut'
					   ];



	
}


?>