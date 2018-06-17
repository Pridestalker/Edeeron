<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecurringExpensesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recurring_expenses', function (Blueprint $table) {
            $table->increments('id');
                // Create foreign key for user table
                $table->unsignedInteger('user_id')->length(10);
                $table->foreign('user_id')->references('id')->on('users');
                // Create source string for people to enter source.
                $table->string('source')->default('income');
                // A double for amount. No conversions done by us
                $table->decimal('amount', 10, 2);
                // The frequency to run this based on the frequency table
                $table->unsignedInteger('frequency')->length(10);
                $table->foreign('frequency')->references('id')->on('frequencies');
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
        Schema::dropIfExists('recurring_expenses');
    }
}
