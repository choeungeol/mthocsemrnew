<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DeleteChartBasicbiopsyRow extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('mth_charts', function(Blueprint $table)
        {
/*            $table->dropColumn(array('minimal_pressure','maximum_pressure','pulse','weight','temperature','chk_diabetes'));*/

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
