<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Usuario extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuario', function (Blueprint $table) {
            $table->bigIncrements('id_usuario');
            $table->string('nombre',100);
            $table->string('cedula',50);
            $table->string('direccion',200);
            $table->string('telefono',50);
            $table->string('password',50);
            $table->string('correo',100);
            $table->unsignedBigInteger('seccion');
            $table->unsignedBigInteger('tipo_usuario');
            $table->foreign('seccion')->references('id_seccion')->on('seccion');
            $table->foreign('tipo_usuario')->references('id_tipo_usuario')->on('tipo_usuario');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('usuario');
    }
}