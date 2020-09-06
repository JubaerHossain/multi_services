<?php

use Carbon\Carbon;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMenusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menus', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 255);
            $table->integer('position')->nullable();
            $table->string('url')->nullable();
            $table->integer('page_id')->nullable();
            $table->integer('type')->nullable();
            $table->boolean('status')->default(1);
            $table->timestamps();
        });

        DB::table('menus')->insert([
            [
                'name' => 'Home',
                'position' => 1,
                'type' => 1,
                'url' =>  '',
                'created_at' => Carbon::now()
            ],
            [
                'name' => 'Service',
                'url' =>  'service',
                'position' => 2,
                'type' => 2,
                'created_at' => Carbon::now()
            ],
            [
                'name' => 'Blog',
                'position' => 3,
                'type' => 3,
                'url' =>  'blog',
                'created_at' => Carbon::now()
            ],
            [
                'name' => 'Domain',
                'position' => 4,
                'type' => 1,
                'url' =>  'domain',
                'created_at' => Carbon::now()
            ],
            [
                'name' => 'About us',
                'position' => 5,
                'type' => 1,
                'url' =>  'about-us',
                'created_at' => Carbon::now()
            ],
            
            [
                'name' => 'Hosting',
                'position' => 6,
                'type' => 1,
                'url' =>  'hosting',
                'created_at' => Carbon::now()
            ],
            [
                'name' => 'Contact',
                'position' => 8,
                'type' => 1,
                'url' =>  'contact-us',
                'created_at' => Carbon::now()
            ],
            [
                'name' => 'Course',
                'position' => 7,
                'type' => 1,
                'url' =>  'course',
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
        Schema::dropIfExists('menus');
    }
}
