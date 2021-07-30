<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFlightPlanDronesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('flight_plan_drones', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('flight_plan_id');
            $table->unsignedInteger('drone_id');
            $table->timestamps();

            $table->foreign('flight_plan_id')->references('id')->on('flight_plans');
            $table->foreign('drone_id')->references('id')->on('drones');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('flight_plan_drones');
    }
}
