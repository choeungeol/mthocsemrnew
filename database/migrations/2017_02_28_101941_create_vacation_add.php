<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVacationAdd extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vacationadds', function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('pinfo_id');
            $table->string('vacation_title');
            $table->string('use_date');
            $table->boolean('pay_apply')->default(0);
            $table->string('use_dates');
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
        Schema::drop('vacationadds');
    }
}
