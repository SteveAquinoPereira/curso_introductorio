<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id_user');
            $table->string('name',100);
            $table->string('last_name',100);
            $table->string('cedula',50);
            $table->string('address',200);
            $table->string('phone_number',50);
            $table->string('password',50);
            $table->string('email',100);
            $table->unsignedBigInteger('section');
            $table->unsignedBigInteger('user_type');
            $table->unsignedBigInteger('gender');
            $table->foreign('section')->references('id_section')->on('sections');
            $table->foreign('user_type')->references('id_user_type')->on('user_types');
            $table->foreign('gender')->references('id_gender')->on('genders');
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
