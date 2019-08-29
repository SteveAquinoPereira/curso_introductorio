<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEvaluationUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('evaluation_user', function (Blueprint $table) {

            $table->unsignedBigInteger('user');
            $table->unsignedBigInteger('evaluation');
            $table->integer('note');
            $table->foreign('user')->references('id_user')->on('users');
            $table->foreign('evaluation')->references('id_evaluation')->on('evaluations');
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