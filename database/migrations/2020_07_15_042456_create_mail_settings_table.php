<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMailSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mail_settings', function (Blueprint $table) {
            $table->increments('id');
            $table->string('email_engine_type')->nullable();
            $table->string('from_name')->nullable();
            $table->string('from_email')->nullable(); 
            $table->string('mail_driver')->nullable();
            $table->string('mail_host')->nullable();
            $table->string('mail_port')->nullable();
            $table->string('mail_username')->nullable();
            $table->string('mail_password')->nullable();
            $table->string('mail_encryption')->nullable(); 
            $table->tinyInteger('active_status')->default(1);
            $table->integer('created_by')->nullable()->default(1)->unsigned();  
            $table->timestamps();
        });

        DB::table('mail_settings')->insert([
            [
                'email_engine_type' => 'smtp', 
                'from_name'=>'System Admin',
                'from_email'=>'admin@jospharma.com', 
                'mail_driver'=>'smtp',
                'mail_host'=>'smtp.gmail.com', 
                'mail_port'=>'587',
                'mail_username'=>'admin@jospharma.com',
                'mail_password'=>'123456',
                'mail_encryption'=>'tls',
                'active_status'=>'1',
            ]
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mail_settings');
    }
}
