<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFaqsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('faqs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('question_title',255)->nullable();
            $table->text('question_answer')->nullable();
            $table->boolean('status')->default(1);
            $table->timestamps();
        });
        DB::table('faqs')->insert([
            [
                'question_title'       =>'On which orders D-Force will be eligible for bonus?',
                'question_answer'       =>'BDT 100 will be given to D-Force on customer’s first purchase (via Daraz App) made through the link shared',
            ],
            [
                'question_title'       =>'Is bonus applicable on sales made using a voucher?',
                'question_answer'       =>'Yes. Bonus is applicable on sales as long as the paid price is equal to or above BDT 500.',
            ],
            [
                'question_title'       =>'Is bonus applicable on sales made using a voucher?',
                'question_answer'       =>'Yes. Bonus is applicable on sales as long as the paid price is equal to or above BDT 500.',
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
        Schema::dropIfExists('faqs');
    }
}
