<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderPricePlansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_price_plans', function (Blueprint $table) {
            $table->increments('id');
            $table->string('sub_total')->nullable();
            $table->string('total')->nullable();
            $table->string('method')->nullable();
            $table->string('charge_id')->nullable();
            $table->string('txnid')->nullable();
            $table->Integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->Integer('price_plan_id')->unsigned();
            $table->foreign('price_plan_id')->references('id')->on('price_plans')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('order_price_plans');
    }
}
