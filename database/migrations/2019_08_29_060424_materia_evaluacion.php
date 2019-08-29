<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MateriaEvaluacion extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('materia_evaluacion', function (Blueprint $table) {

            $table->unsignedBigInteger('materia');
            $table->unsignedBigInteger('evaluacion');
            $table->foreign('materia')->references('id_materia')->on('materias');
            $table->foreign('evaluacion')->references('id_evaluacion')->on('evaluacions');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('materia_evaluacion');
    }
}