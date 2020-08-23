<?php

use Carbon\Carbon;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->increments('id');
			$table->string('title')->nullable();
			$table->string('slug')->nullable();
			$table->text('description')->nullable();
			$table->string('image')->nullable();
			$table->boolean('status')->default(1);
            $table->timestamps();
        });

        DB::table('services')->insert([
            [
                'title' => 'Web Design',
                'slug' => 'web_design',
                'description' =>'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.',
                'image' => 'public/front/assets/img/services/1.png',
                'created_at' => Carbon::now()
            ],
            [
                'title' => 'Web Development',
                'slug' => 'web_development',
                'description' =>'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.',
                'image' => 'public/front/assets/img/services/2.png',
                'created_at' => Carbon::now()
            ],
            [
                'title' => 'Graphics Design',
                'slug' => 'graphics_design',
                'description' =>'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.',
                'image' => 'public/front/assets/img/services/3.png',
                'created_at' => Carbon::now()
            ],
            [
                'title' => 'Digital Marketing',
                'slug' => 'digital_marketing',
                'description' =>'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.',
                'image' => 'public/front/assets/img/services/4.png',
                'created_at' => Carbon::now()
            ],
            [
                'title' => 'Domain',
                'slug' => 'domain',
                'description' =>'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.',
                'image' => 'public/front/assets/img/services/5.png',
                'created_at' => Carbon::now()
            ],
            [
                'title' => 'Hosting',
                'slug' => 'hosting',
                'description' =>'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.',
                'image' => 'public/front/assets/img/services/6.png',
                'created_at' => Carbon::now()
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
        Schema::dropIfExists('services');
    }
}
