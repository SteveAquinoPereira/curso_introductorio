<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->bigIncrements('id_usuario');
            $table->string('nombre',100);
            $table->string('apellido',100);
            $table->string('cedula',50);
            $table->string('direccion',200);
            $table->string('telefono',50);
            $table->string('password',50);
            $table->string('correo',100);
            $table->unsignedBigInteger('seccion');
            $table->unsignedBigInteger('tipo_usuario');
            $table->unsignedBigInteger('genero');
            $table->foreign('seccion')->references('id_seccion')->on('seccions');
            $table->foreign('tipo_usuario')->references('id_tipo_usuario')->on('tipo_usuarios');
            $table->foreign('genero')->references('id_genero')->on('generos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuarios');
    }
}
