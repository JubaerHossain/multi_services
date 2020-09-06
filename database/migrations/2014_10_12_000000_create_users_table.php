<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->nullable();
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('email')->unique();
            $table->string('password');
            $table->string('gender')->nullable();           
            $table->date('date_of_birth')->nullable();
            $table->string('company')->nullable();
            $table->string('designation')->nullable();
            $table->string('title')->nullable();
            $table->string('phone_number')->nullable();
            $table->mediumText('address')->nullable();
            $table->string('avatar')->default('public/uploads/profile/default.jpg');
            $table->boolean('verified')->default(0);
            $table->tinyInteger('enabled')->default(1);
            $table->integer('created_by')->default(1);
            $table->string('token', 254)->nullable();   // confirm_token', 100
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
