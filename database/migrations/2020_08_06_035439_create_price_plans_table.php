<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePricePlansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('price_plans', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title',255)->nullable();
            $table->float('price',10,2)->nullable();
            $table->float('discount',10,2)->nullable();
            $table->longText('features');
            $table->integer('type')->default(0);
            $table->boolean("status")->default(1);
            $table->timestamps();
        });

        DB::table('price_plans')->insert([
            [
                'title' => 'Free',
                'price' => 0.00,
                'features'=>"<li><i class='bx bx-check'></i> Drag & Drop Builder</li>
 <li><i class='bx bx-check'></i> Lead Generation & Sales</li>
 <li><i class='bx bx-check'></i> Boot & Digital Assistants</li>
 <li><i class='bx bx-check'></i> Customer Service</li>
 <li><i class='bx bx-check'></i> Up to 1000 Subscribers</li>
 <li><i class='bx bx-check'></i> Unlimited Broadcasts</li>
 <li><i class='bx bx-check'></i> Landing Pages & Web Widgets</li>", 
            ],
            [
                'title' => 'Pro',
                'price' => 129,
                'features'=>"<li><i class='bx bx-check'></i> Drag & Drop Builder</li>
 <li><i class='bx bx-check'></i> Lead Generation & Sales</li>
 <li><i class='bx bx-check'></i> Boot & Digital Assistants</li>
 <li><i class='bx bx-check'></i> Customer Service</li>
 <li><i class='bx bx-check'></i> Up to 1000 Subscribers</li>
 <li><i class='bx bx-check'></i> Unlimited Broadcasts</li>
 <li><i class='bx bx-check'></i> Landing Pages & Web Widgets</li>", 
            ],
            [
                'title' => 'Premium',
                'price' => 169,
                'features'=>"<li><i class='bx bx-check'></i> Drag & Drop Builder</li>
 <li><i class='bx bx-check'></i> Lead Generation & Sales</li>
 <li><i class='bx bx-check'></i> Boot & Digital Assistants</li>
 <li><i class='bx bx-check'></i> Customer Service</li>
 <li><i class='bx bx-check'></i> Up to 1000 Subscribers</li>
 <li><i class='bx bx-check'></i> Unlimited Broadcasts</li>
 <li><i class='bx bx-check'></i> Landing Pages & Web Widgets</li>", 
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
        Schema::dropIfExists('price_plans');
    }
}
