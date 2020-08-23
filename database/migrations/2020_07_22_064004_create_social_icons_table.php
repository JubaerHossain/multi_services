<?php

use Carbon\Carbon;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSocialIconsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('social_icons', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('icon');
            $table->string('url');
            $table->boolean('status')->default(1);
            $table->timestamps();
        });

        DB::table('social_icons')->insert([
            [
                'name' => 'Facebook',
                'icon' =>  'fa-facebook',
                'url' => 'icon',
                'created_at' => Carbon::now()
            ],
            [
                'name' => 'Twitter',
                'icon' => 'fa-twitter',
                'url' =>  '',
                'created_at' => Carbon::now()
            ],
            [
                'name' => 'Rss',
                'icon' => 'fa-rss',
                'url' =>  '',
                'created_at' => Carbon::now()
            ],
            [
                'name' => 'Google Plus',
                'icon' => 'fa-google-plus',
                'url' =>  '',
                'created_at' => Carbon::now()
            ],
            [
                'name' => 'Skype',
                'icon' => 'fa-skype',
                'url' =>  '',
                'created_at' => Carbon::now()
            ],
            [
                'name' => 'Dribbble',
                'icon' => 'fa-dribbble',
                'url' =>  '',
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
        Schema::dropIfExists('social_icons');
    }
}
