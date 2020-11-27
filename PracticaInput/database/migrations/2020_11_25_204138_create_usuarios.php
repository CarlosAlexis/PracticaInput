<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuarios extends Migration
{
   //crea las tablas
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table -> increments('idUsuario');
            $table -> string('user', 200);
            $table -> string('password', 255);
            $table -> string('key', 255);
            $table -> timestamps();
        });
    }




    //borra las tablas  B)
    public function down()
    {
        Schema::table('usuarios', function (Blueprint $table) {
            schema::dropIfExists('usuarios');
        });
    }
}
