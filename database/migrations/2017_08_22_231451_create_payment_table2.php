<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaymentTable2 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('payment', function (Blueprint $table) {

            /*
            $table->integer('user_id')->unsigned()->default(1);
            $table->foreign('user_id')->references('id')->on('user');
            $table->integer('order_id')->unsigned()->default(1);
            $table->foreign('order_id')->references('id')->on('order');
            $table->string('account');
            $table->string('our_account');
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
        Schema::table('payment', function (Blueprint $table) {
            //
        });
    }
}
