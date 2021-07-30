<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFlightPlanCoordinatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('flight_plan_coordinates', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('flight_plan_id');
            $table->float('points', 8, 2);
            $table->timestamps();

            $table->foreign('flight_plan_id')->references('id')->on('flight_plans');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('flight_plan_coordinates');
    }
}
