<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModuleActionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('module_actions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->integer('sub_module_id')->nullable();
            $table->boolean('status')->default(1);
            $table->timestamps();
        });

        DB::table('module_actions')->insert([
            ['name' => 'Nav view','sub_module_id' => 1],
            //Medicinals
            ['name' => 'Nav view','sub_module_id' => 2],
            //Generic
            ['name' => 'list','sub_module_id' => 3],
            ['name' => 'Add','sub_module_id' => 3],
            ['name' => 'View','sub_module_id' => 3],
            ['name' => 'Edit','sub_module_id' => 3],
            ['name' => 'Delete','sub_module_id' => 3],
            //Brand
            ['name' => 'list','sub_module_id' => 4],
            ['name' => 'Add','sub_module_id' => 4],
            ['name' => 'View','sub_module_id' => 4],
            ['name' => 'Edit','sub_module_id' => 4],
            ['name' => 'Delete','sub_module_id' => 4],
            //Icon
            ['name' => 'list','sub_module_id' => 5],
            ['name' => 'Add','sub_module_id' => 5],
            ['name' => 'View','sub_module_id' => 5],
            ['name' => 'Edit','sub_module_id' => 5],
            ['name' => 'Delete','sub_module_id' => 5],
            // category
            ['name' => 'list','sub_module_id' => 6],
            ['name' => 'Add','sub_module_id' => 6],
            ['name' => 'View','sub_module_id' => 6],
            ['name' => 'Edit','sub_module_id' => 6],
            ['name' => 'Delete','sub_module_id' => 6],
            // Medicine
            ['name' => 'list','sub_module_id' =>7],
            ['name' => 'Add','sub_module_id' =>7],
            ['name' => 'View','sub_module_id' =>7],
            ['name' => 'Edit','sub_module_id' =>7],
            ['name' => 'Delete','sub_module_id' =>7],
            //Purchase
            ['name' => 'Nav view','sub_module_id' => 8],
            ['name' => 'list','sub_module_id' => 8],
            ['name' => 'Add','sub_module_id' => 8],
            ['name' => 'View','sub_module_id' => 8],
            ['name' => 'Edit','sub_module_id' => 8],
            ['name' => 'Delete','sub_module_id' => 8],
            //Payment
            ['name' => 'Nav view','sub_module_id' => 9],
            ['name' => 'list','sub_module_id' => 9],
            ['name' => 'Add','sub_module_id' => 9],
            ['name' => 'View','sub_module_id' => 9],
            ['name' => 'Edit','sub_module_id' => 9],
            ['name' => 'Delete','sub_module_id' => 9],
            //Stocks
            ['name' => 'Nav view','sub_module_id' => 10],
            ['name' => 'list','sub_module_id' => 10],
            ['name' => 'View','sub_module_id' => 10],
            ['name' => 'Edit','sub_module_id' => 10],
            //Out Stocks
            ['name' => 'list','sub_module_id' => 11],
            ['name' => 'View','sub_module_id' => 11],
            ['name' => 'Edit','sub_module_id' => 11],
            //POS
            ['name' => 'Nav view','sub_module_id' => 12],
            ['name' => 'list','sub_module_id' => 12],
            ['name' => 'Add','sub_module_id' => 12],
            //Sale
            ['name' => 'list','sub_module_id' => 12],
            ['name' => 'Add','sub_module_id' => 12],
            ['name' => 'View','sub_module_id' => 12],
            ['name' => 'Edit','sub_module_id' => 12],
            ['name' => 'Delete','sub_module_id' => 12],
            //Finance
            ['name' => 'Nav view','sub_module_id' => 14],
            //Invest
            ['name' => 'list','sub_module_id' => 15],
            ['name' => 'Add','sub_module_id' => 15],
            ['name' => 'View','sub_module_id' => 15],
            ['name' => 'Edit','sub_module_id' => 15],
            ['name' => 'Delete','sub_module_id' => 15],
            //Income Head
            ['name' => 'list','sub_module_id' => 16],
            ['name' => 'Add','sub_module_id' => 16],
            ['name' => 'View','sub_module_id' => 16],
            ['name' => 'Edit','sub_module_id' => 16],
            ['name' => 'Delete','sub_module_id' => 16],
            //Income
            ['name' => 'list','sub_module_id' => 17],
            ['name' => 'Add','sub_module_id' => 17],
            ['name' => 'View','sub_module_id' => 17],
            ['name' => 'Edit','sub_module_id' => 17],
            ['name' => 'Delete','sub_module_id' => 17],
            //Expense Head
            ['name' => 'list','sub_module_id' => 18],
            ['name' => 'Add','sub_module_id' => 18],
            ['name' => 'View','sub_module_id' => 18],
            ['name' => 'Edit','sub_module_id' => 18],
            ['name' => 'Delete','sub_module_id' => 18],
            //Expense
            ['name' => 'list','sub_module_id' => 19],
            ['name' => 'Add','sub_module_id' => 19],
            ['name' => 'View','sub_module_id' => 19],
            ['name' => 'Edit','sub_module_id' => 19],
            ['name' => 'Delete','sub_module_id' => 19],
            //Suppliers
            ['name' => 'Nav view','sub_module_id' => 20],
            ['name' => 'list','sub_module_id' => 20],
            ['name' => 'Add','sub_module_id' => 20],
            ['name' => 'View','sub_module_id' => 20],
            ['name' => 'Edit','sub_module_id' => 20],
            ['name' => 'Delete','sub_module_id' => 20],
            //Customers
            ['name' => 'Nav view','sub_module_id' => 21],
            ['name' => 'list','sub_module_id' => 21],
            ['name' => 'Add','sub_module_id' => 21],
            ['name' => 'View','sub_module_id' => 21],
            ['name' => 'Edit','sub_module_id' => 21],
            ['name' => 'Delete','sub_module_id' => 21],
            //Bank
            ['name' => 'Nav view','sub_module_id' => 22],
            ['name' => 'list','sub_module_id' => 22],
            ['name' => 'Add','sub_module_id' => 22],
            ['name' => 'View','sub_module_id' => 22],
            ['name' => 'Edit','sub_module_id' => 22],
            ['name' => 'Delete','sub_module_id' => 22],
            //Service
            ['name' => 'Nav view','sub_module_id' => 23],
            //Service Type
            ['name' => 'list','sub_module_id' => 24],
            ['name' => 'Add','sub_module_id' => 24],
            ['name' => 'View','sub_module_id' => 24],
            ['name' => 'Edit','sub_module_id' => 24],
            ['name' => 'Delete','sub_module_id' => 24],
            //Service Manage
            ['name' => 'list','sub_module_id' => 25],
            ['name' => 'Add','sub_module_id' => 25],
            ['name' => 'View','sub_module_id' => 25],
            ['name' => 'Edit','sub_module_id' => 25],
            ['name' => 'Delete','sub_module_id' => 25],
            //Tax
            ['name' => 'Nav view','sub_module_id' => 26],
            ['name' => 'list','sub_module_id' => 26],
            ['name' => 'Add','sub_module_id' => 26],
            ['name' => 'View','sub_module_id' => 26],
            ['name' => 'Edit','sub_module_id' => 26],
            ['name' => 'Delete','sub_module_id' => 26],
            //User Management
            ['name' => 'Nav view','sub_module_id' => 27],
            //Settings
            ['name' => 'Nav view','sub_module_id' => 28],
            //Theme Color
            ['name' => 'list','sub_module_id' => 29],
            ['name' => 'Edit','sub_module_id' => 29],
            //General Settings
            ['name' => 'list','sub_module_id' => 30],
            ['name' => 'Edit','sub_module_id' => 30],
            //Role & Permission
            ['name' => 'list','sub_module_id' => 31],
            ['name' => 'Add','sub_module_id' => 31],
            ['name' => 'View','sub_module_id' => 31],
            ['name' => 'Edit','sub_module_id' => 31],
            ['name' => 'Delete','sub_module_id' => 31],
            ['name' => 'Permission','sub_module_id' => 31],
            //Database Backup
            ['name' => 'list','sub_module_id' => 32],
            ['name' => 'Add','sub_module_id' => 32],
            ['name' => 'View','sub_module_id' => 32],
            ['name' => 'Edit','sub_module_id' => 32],
            ['name' => 'Delete','sub_module_id' => 32],
            ['name' => 'Permission','sub_module_id' => 32],
            //Email Settings
            ['name' => 'list','sub_module_id' => 33],
            ['name' => 'Edit','sub_module_id' => 33],

        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('module_actions');
    }
}
