<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMthPrescribesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mth_prescribes', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('chart_id')->unsigned();
            $table->foreign('chart_id')->references('id')->on('mth_charts');
            $table->string('teuk',100);         //특
            $table->string('code',100);         //코드
            $table->string('code_name',100);    //코드명
            $table->integer('price');           //가격
            $table->integer('dosage');       //투여량
            $table->integer('part');         //회수
            $table->integer('pday');         //일수
            $table->string('cdvision',100);     //청구구분
            $table->string('iohospital',100);   //원내/외
            $table->string('cspecimen',100);    //검체
            $table->string('useage',100);       //용법
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
        Schema::drop('mth_prescribes');
    }
}
