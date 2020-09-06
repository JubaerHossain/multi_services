<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->increments('id');
            $table->string("title")->nullable();
            $table->string("slug")->nullable();
            $table->date("date")->nullable();
            $table->string("no_of_class")->nullable();
            $table->string("total_hour")->nullable();
            $table->string("duration")->nullable();
            $table->date("last_date")->nullable();
            $table->string("class_schedule")->nullable();
            $table->string("venue")->nullable();
            $table->boolean("price_type")->default(1);
            $table->float("price", 10, 2)->nullable();
            $table->string("class_start")->default(1);
            $table->string("seat_available")->nullable();
            $table->string("who_can_join")->nullable();
            $table->text("desciption")->nullable();
            $table->longText("outline")->nullable();
            $table->string("image")->nullable();
            $table->boolean("status")->default(1);

            $table->Integer('trainer_id')->unsigned();
            $table->foreign('trainer_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
			$table->Integer('mentor_id')->unsigned();
            $table->foreign('mentor_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
			
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
        Schema::dropIfExists('courses');
    }
}
