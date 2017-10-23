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
        Schema::create('user', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('sename');
            $table->string('email')->unique();
            $table->string('password');
            $table->integer('phone');
            $table->integer('year');
            $table->integer('month');
            $table->integer('day');
            $table->string('country');
            $table->string('region');
            $table->string('city');
            $table->string('street');
            $table->integer('house');
            $table->integer('status');
            //$table->integer('rols');
            $table->string('sex');
            $table->integer('public');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user');
    }
}
