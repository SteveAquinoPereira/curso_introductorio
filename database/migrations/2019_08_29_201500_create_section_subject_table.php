<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSectionSubjectTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('section_subject', function (Blueprint $table) {

            $table->unsignedBigInteger('section');
            $table->unsignedBigInteger('subject');
            $table->foreign('section')->references('id_section')->on('sections');
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
        Schema::drop('section_subject');
    }
}
