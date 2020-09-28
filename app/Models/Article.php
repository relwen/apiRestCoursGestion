<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
/**
 * Class Article permet d'enregistrer 
 * des produits dans notre boutique en ligne
 */
class Article extends Model
{

//	protected $table = 'articles';
   protected $fillable =[
					   	'id_article',
					   	'categorie',
					   	'libelle_article',
					   	'prix_article',
					   	'stock_article',
					   	'descriptif_article',
					   	'img1_article',
					   	'img2_article',
					   	'img3_article',
					   ];
	
	
}