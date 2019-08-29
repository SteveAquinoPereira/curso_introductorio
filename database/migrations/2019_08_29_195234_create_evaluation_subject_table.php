<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEvaluationSubjectTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('evaluation_subject', function (Blueprint $table) {

            $table->unsignedBigInteger('evaluation');
            $table->unsignedBigInteger('subject');
            $table->foreign('evaluation')->references('id_evaluation')->on('evaluations');
            $table->foreign('subject')->references('id_subject')->on('subjects');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('evaluation_subject');
    }
}