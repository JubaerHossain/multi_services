<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGuestOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('guest_orders', function (Blueprint $table) {
            $table->increments('id');
            $table->double('qty')->nullable();
            $table->double('qty_sft')->nullable();
            $table->double('length')->nullable();
            $table->double('heigth')->nullable();
            $table->double('net_unit_cost')->nullable();
            $table->Integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('guest_users')->onDelete('cascade')->onUpdate('cascade');
			
            $table->Integer('product_id')->unsigned();
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade')->onUpdate('cascade');
			
            $table->float('subtotal',10,2)->nullable();
            $table->float('discount',10,2)->nullable();
            
            $table->boolean('status')->default(1);
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
        Schema::dropIfExists('guest_orders');
    }
}
