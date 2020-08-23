<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('site_name')->nullable();
            $table->string('site_title')->nullable();
            $table->string('language')->nullable();
            $table->string('color')->nullable();
            $table->string('address')->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->string('fax')->nullable();
            $table->string('print')->nullable();
            $table->integer('currency')->nullable();
            $table->string('logo')->nullable();
            $table->string('favicon')->nullable();
            $table->string('copyright_text')->nullable();
            $table->string('barcode_type')->nullable();
            $table->string('software_version')->nullable();
            $table->string('time_zone_id')->nullable();
            $table->string('system_activated_date')->nullable();
            $table->string('tax')->default(10);
            $table->string('system_domain')->nullable();
            $table->timestamps();
        });

        DB::table('settings')->insert([
            'language'     => 'en',
            'color'        => 1,
            'site_name'      => 'X-TeamIT',
            'site_title'      => 'X-TeamIT',
            'address'   => 'Dhaka,Bangladesh',
            'email'     => 'xteamitbd@gmail.com',
            'fax'       => 'xxxxxxxxx',
            'print'     => '1',
            'currency'     => 2,
            'barcode_type' => 'QRCODE‎',
            'copyright_text' => 'Copyright &copy; 2020 All rights reserved | This template is made by X-TeamIT',
            'logo' => 'public/uploads/settings/logo.png',
            'favicon' => 'public/uploads/settings/favicon.png',
            'phone' => '+01303159886',
            'time_zone_id' => 51,
            'software_version' => '4.4',
            'system_activated_date' => date('Y-m-d'),
            'system_domain' => url('/')
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('setting');
    }
}
