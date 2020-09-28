<?php

use \App\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class UserTable extends Migration
{
    public function up()
    {
        $this->schema->create('users', function (Blueprint $table) {
            $table->string('code')->primary();
            $table->string('nom', 50);
            $table->string('prenom', 100);
            $table->string('email', 100);
            $table->timestamps();
        });

        
    }

    public function down()
    {
        $this->schema->drop('users');
    }
}