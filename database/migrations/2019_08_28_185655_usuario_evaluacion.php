<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UsuarioEvaluacion extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuario_evaluacion', function (Blueprint $table) {

            $table->unsignedBigInteger('usuario');
            $table->unsignedBigInteger('evaluacion');
            $table->integer('nota');
            $table->foreign('usuario')->references('id_usuario')->on('usuario');
            $table->foreign('evaluacion')->references('id_evaluacion')->on('evaluacion');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('usuario_evaluacion');
    }
}