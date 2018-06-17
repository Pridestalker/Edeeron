<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIncomesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('incomes', function (Blueprint $table) {
            $table->increments('id');
                // Create foreign key for user table
                $table->unsignedInteger('user_id')->length(10);
                $table->foreign('user_id')->references('id')->on('users');
                // Create source string for people to enter source.
                $table->string('source')->default('income');
                // A double for amount. No conversions done by us
                $table->decimal('amount', 10, 2);
                // The month in numbers [1,12] corresponds to each month
                $table->integer('month');
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
        Schema::dropIfExists('incomes');
    }
}
