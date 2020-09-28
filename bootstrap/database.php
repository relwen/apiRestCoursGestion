<?php
 
 $config = $container['settings']['database'];

 $capsule = new Illuminate\Database\Capsule\Manager;

$capsule->addConnection(array_merge($config,[
	'charset' =>'utf8',
	'collation' => 'utf8_general_ci'
]));

$capsule->bootEloquent();
$capsule->setAsGlobal();