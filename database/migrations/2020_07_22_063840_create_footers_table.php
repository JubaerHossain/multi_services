<?php

use Carbon\Carbon;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFootersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('footers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title')->nullable();
            $table->string('button_name')->nullable();
            $table->string('banner_img')->nullable();
            $table->string('button_url')->nullable();
            $table->text('header_description')->nullable();
            $table->text('footer_description')->nullable();
            $table->timestamps();
        });
        DB::table('footers')->insert([
            [
                'title' => 'Honest Traders Ltd',
                'button_name' => 'Click Here',
                'banner_img' => 'public/front/assets/img/banner-img1.png',
                'button_url' => '',
                'header_description' =>  'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.',
                'footer_description' => 'We are team based on Los Angeles. Our expertise on Honest Traders. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.',
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
        Schema::dropIfExists('footers');
    }
}
