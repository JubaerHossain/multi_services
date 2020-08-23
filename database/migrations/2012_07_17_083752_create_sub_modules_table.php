<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubModulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sub_modules', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->integer('module_id')->nullable();
            $table->boolean('status')->default(1);
            $table->timestamps();
        });

        DB::table('sub_modules')->insert([
            ['name' => 'Dashboard','module_id' => 1],
            ['name' => 'Medicinals','module_id' => 2],
            ['name' => 'Generic','module_id' => 2],
            ['name' => 'Brand','module_id' => 2],
            ['name' => 'Icon','module_id' => 2],
            ['name' => 'Categories','module_id' => 2],
            ['name' => 'Medicine','module_id' => 2],
            ['name' => 'Purchase','module_id' => 3],
            ['name' => 'Payment','module_id' => 4],
            ['name' => 'Stocks','module_id' => 5],
            ['name' => 'Out Stocks','module_id' => 5],
            ['name' => 'POS','module_id' => 6],
            ['name' => 'Sale','module_id' => 6],
            ['name' => 'Finance','module_id' => 7],
            ['name' => 'Invest','module_id' => 7],
            ['name' => 'Income Head','module_id' => 7],
            ['name' => 'Income','module_id' => 7],
            ['name' => 'Expense Head','module_id' => 7],
            ['name' => 'Expense','module_id' => 7],
            ['name' => 'Suppliers','module_id' => 8],
            ['name' => 'Customers','module_id' => 9],
            ['name' => 'Bank','module_id' => 10],
            ['name' => 'Service','module_id' => 11],
            ['name' => 'Service Type','module_id' => 11],
            ['name' => 'Service Manage','module_id' => 11],
            ['name' => 'Tax','module_id' => 12],
            ['name' => 'User Management','module_id' => 13],
            ['name' => 'Settings','module_id' => 14],
            ['name' => 'Theme Color','module_id' => 14],
            ['name' => 'General Settings','module_id' => 14],
            ['name' => 'Role & Permission','module_id' => 14],
            ['name' => 'Database Backup','module_id' => 14],
            ['name' => 'Email Settings','module_id' => 14],

        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sub_modules');
    }
}
