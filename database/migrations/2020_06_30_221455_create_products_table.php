<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title', 240)->nullable();
            $table->string('slug', 240)->nullable();
            $table->text('desc')->nullable();
            $table->text('summary')->nullable();
            $table->integer('quantity')->nullable();
            $table->integer('out_stock')->nullable();
            $table->integer('sale')->nullable();
            $table->float('price',10,2)->nullable();
            $table->float('discount',10,2)->nullable();
            $table->string('image')->nullable();
            $table->boolean('status')->default(1);

            $table->Integer('service_id')->unsigned();
            $table->foreign('service_id')->references('id')->on('services')->onDelete('cascade')->onUpdate('cascade');

            $table->Integer('created_by')->unsigned()->default(1);
            $table->foreign('created_by')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('products');
    }
}
