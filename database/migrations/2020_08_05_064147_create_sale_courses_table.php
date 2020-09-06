<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSaleCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sale_courses', function (Blueprint $table) {
            $table->increments('id');
            $table->string('qty')->nullable();
            $table->string('net_unit_cost')->nullable();
            $table->string('total')->nullable();
            $table->Integer('course_id')->unsigned();
            $table->foreign('course_id')->references('id')->on('courses')->onDelete('cascade')->onUpdate('cascade');
            $table->Integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('guest_users')->onDelete('cascade')->onUpdate('cascade');

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
        Schema::dropIfExists('sale_courses');
    }
}
