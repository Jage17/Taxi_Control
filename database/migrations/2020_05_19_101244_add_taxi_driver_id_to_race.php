<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTaxiDriverIdToRace extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('race', function (Blueprint $table) {
            $table->unsignedInteger('taxi_driver_id');
            $table->foreign('taxi_driver_id')->references('id')->on('taxi_drivers');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('race', function (Blueprint $table) {
            $table->dropForeign(['taxi_driver_id']);
            $table->dropColumn('taxi_driver_id');
        });
    }
}
