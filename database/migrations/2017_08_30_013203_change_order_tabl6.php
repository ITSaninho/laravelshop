<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangeOrderTabl6 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('order', function (Blueprint $table) {
            $table->increments('id');
            $table->string('status');
            $table->string('length');
            $table->string('height');
            $table->string('width');
            $table->string('size_integer');
            $table->string('size_string');
            $table->string('weight');
            $table->string('color');
            $table->string('material');
            $table->integer('count');
            $table->string('price');
            $table->string('sum');
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
        Schema::dropIfExists('order');
    }
}
