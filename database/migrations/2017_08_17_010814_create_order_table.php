<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order', function (Blueprint $table) {
            /*
            $table->increments('id');
            //$table->integer('user_id');
            //$table->integer('product_id');
            $table->string('data_over');
            $table->string('status');
            //$table->integer('delivery_id');

            $table->string('length');
            $table->string('height');
            $table->integer('width');
            $table->integer('size_integer');
            $table->integer('size_string');
            $table->integer('weight');
            $table->integer('color');
            $table->text('material');
            $table->integer('count');
            $table->timestamps();
            */
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        /*
        Schema::dropIfExists('order');
        */
    }
}
