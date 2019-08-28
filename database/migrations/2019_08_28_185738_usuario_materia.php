<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UsuarioMateria extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuario_materia', function (Blueprint $table) {

            $table->unsignedBigInteger('usuario');
            $table->unsignedBigInteger('materia');
            $table->foreign('usuario')->references('id_usuario')->on('usuario');
            $table->foreign('materia')->references('id_materia')->on('materia');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('usuario_materia');
    }
}