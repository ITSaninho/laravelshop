<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBasketTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('basket', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned()->default(1);
            $table->foreign('user_id')->references('id')->on('user');
            $table->integer('product_id')->unsigned()->default(1);
            $table->foreign('product_id')->references('id')->on('product');
            $table->string('length');
            $table->string('height');
            $table->integer('width');
            $table->integer('size_integer');
            $table->integer('size_string');
            $table->integer('weight');
            $table->integer('color');
            $table->text('material');
            $table->integer('count');
            $table->integer('status');
            $table->integer('public')->default(1);
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
        Schema::dropIfExists('basket');
    }
}
