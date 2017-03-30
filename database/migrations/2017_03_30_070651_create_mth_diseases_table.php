<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMthDiseasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mth_diseases', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('chart_id')->unsigned();
            $table->foreign('chart_id')->references('id')->on('mth_charts');
            $table->string('user_code',100);        //사용자코드
            $table->string('sname',100);            //상병명칭
            $table->string('ssymbol',100);            //특정기호
            $table->string('msick',100);            //주상병
            $table->string('ostatus',100);          //수술여부
            $table->string('goby',100);             //경과
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
        Schema::drop('mth_diseases');
    }
}
