<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
/**
 * La classe Categorie Permet De Categoriser Nos Articles
 */
class Categorie extends Model
{
	   protected $fillable =[
					   	'id_categorie',
					   	'libelle_categorie',
					   ];
	
}