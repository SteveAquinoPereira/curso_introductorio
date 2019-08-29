<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SeccionMateria extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seccion_materia', function (Blueprint $table) {

            $table->unsignedBigInteger('seccion');
            $table->unsignedBigInteger('materia');
            $table->foreign('seccion')->references('id_seccion')->on('seccions');
            $table->foreign('materia')->references('id_materia')->on('materias');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('seccion_materia');
    }
}