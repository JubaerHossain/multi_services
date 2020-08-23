<?php

use Carbon\Carbon;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateModulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('modules', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->boolean('status')->default(1);
            $table->timestamps();
        });

        DB::table('modules')->insert([
            ['name' => 'Dashboard','created_at' => Carbon::now()],
            ['name' => 'Medicine','created_at' => Carbon::now()],
            ['name' => 'Purchase','created_at' => Carbon::now()],
            ['name' => 'Payment','created_at' => Carbon::now()],
            ['name' => 'Stocks','created_at' => Carbon::now()],
            ['name' => 'POS','created_at' => Carbon::now()],
            ['name' => 'Finance','created_at' => Carbon::now()],
            ['name' => 'Suppliers','created_at' => Carbon::now()],
            ['name' => 'Customers','created_at' => Carbon::now()],
            ['name' => 'Bank','created_at' => Carbon::now()],
            ['name' => 'Services','created_at' => Carbon::now()],
            ['name' => 'Taxes','created_at' => Carbon::now()],
            ['name' => 'User Management','created_at' => Carbon::now()],
            ['name' => 'Settings','created_at' => Carbon::now()],

        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('modules');
    }
}
