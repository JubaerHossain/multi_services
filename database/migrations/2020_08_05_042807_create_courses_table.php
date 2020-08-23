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
            $table->date("last_date")->nullable();
            $table->string("class_schedule")->nullable();
            $table->string("venue")->nullable();
            $table->float("price", 10, 2)->nullable();
            $table->string("class_start")->nullable();
            $table->string("seat_available")->nullable();
            $table->string("who_can_join")->nullable();
            $table->text("desciption")->nullable();
            $table->text("outline")->nullable();
            $table->string("image")->nullable();
            $table->string("status")->default(1);
            $table->timestamps();
        });


        DB::table('courses')->insert([
            [
                'title' => 'Web Design',
                'slug' => 'web_design',
                'no_of_class' => 20,
                'total_hour' => 60,
                'venue' =>  'Dhaka',
                'price' => 15000,
                'image' => 'public/front/assets/img/resources/1.jpg',
                'seat_available'=>30,
                'who_can_join' => 'Science',
                'desciption'=>"Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs. The passage is attributed to an unknown typesetter in the 15th century who is thought to have scrambled parts of Cicero's De Finibus Bonorum et Malorum for use in a type specimen book", 
                'date' => date("Y-m-d",strtotime("today")),
                'last_date' => date("Y-m-d",strtotime("+1 month")),
                'class_start' => date("Y-m-d",strtotime("+1 week"))
            ],
            [
                'title' => 'Web Development',
                'slug' => 'web_development',
                'venue' =>  'Dhaka',
                'no_of_class' => 30,
                'total_hour' => 90,
                'seat_available'=>30,
                'image' => 'public/front/assets/img/resources/1.jpg',
                'who_can_join' => 'Science',
                'desciption'=>"Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs. The passage is attributed to an unknown typesetter in the 15th century who is thought to have scrambled parts of Cicero's De Finibus Bonorum et Malorum for use in a type specimen book", 
                'price' => 25000,
                'date' => date("Y-m-d",strtotime("today")),
                'last_date' => date("Y-m-d",strtotime("+1 month")),
                'class_start' => date("Y-m-d",strtotime("+1 week"))
            ],
            [
                'title' => 'Graphic Design',
                'slug' => 'graphic_design',
                'no_of_class' => 35,
                'total_hour' => 105,
                'price' => 12500,
                'seat_available'=>30,
                'image' => 'public/front/assets/img/resources/1.jpg',
                'who_can_join' => 'Science',
                'desciption'=>"Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs. The passage is attributed to an unknown typesetter in the 15th century who is thought to have scrambled parts of Cicero's De Finibus Bonorum et Malorum for use in a type specimen book", 
                'venue' =>  'Dhaka',
                'date' => date("Y-m-d",strtotime("today")),
                'last_date' => date("Y-m-d",strtotime("+1 month")),
                'class_start' => date("Y-m-d",strtotime("+1 week"))
            ],
            [
                'slug' => 'digital_marketing',
                'title' => 'Digital Marketing',
                'no_of_class' => 35,
                'total_hour' => 105,
                'price' => 10000,
                'venue' =>  'Dhaka',
                'seat_available'=>30,
                'who_can_join' => 'Science',
                'image' => 'public/front/assets/img/resources/1.jpg',
                'desciption'=>"Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs. The passage is attributed to an unknown typesetter in the 15th century who is thought to have scrambled parts of Cicero's De Finibus Bonorum et Malorum for use in a type specimen book", 
                'date' => date("Y-m-d",strtotime("today")),
                'last_date' => date("Y-m-d",strtotime("+1 month")),
                'class_start' => date("Y-m-d",strtotime("+1 week"))
            ],
        ]);
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
