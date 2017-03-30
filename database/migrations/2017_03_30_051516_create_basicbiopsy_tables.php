<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBasicbiopsyTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('mth_basic_biopsies', function (Blueprint $table) {

        $table->engine = 'InnoDB';
        $table->increments('id');
        $table->integer('chart_id')->unsigned();
        $table->foreign('chart_id')->references('id')->on('mth_charts');
        $table->decimal('minimal_pressure', 3, 0)->nullable();
        $table->decimal('maximum_pressure', 3, 0)->nullable();
        $table->decimal('pulse', 3, 0)->nullable();
        $table->decimal('weight', 3, 2)->nullable();
        $table->decimal('temperature', 3, 1)->nullable();
        $table->decimal('breath', 3, 2)->nullable();
        $table->decimal('height', 3, 2)->nullable();
        $table->boolean('chk_diabetes')->nullable()->default(0);
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
        Schema::drop('mth_basic_biopsies');
    }
}
