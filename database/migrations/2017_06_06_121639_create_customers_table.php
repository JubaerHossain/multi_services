<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('number')->nullable();
            $table->unique('number')->nullable();
            $table->string('name', 200)->nullable();
            $table->integer('country_id')->nullable();
            $table->string('info')->nullable();
            $table->string('address')->nullable();
            $table->bigInteger('phone')->nullable();
            $table->string('fax')->nullable();
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
        Schema::dropIfExists('customers');
    }
}
