<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFlightPlanEnrolmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('flight_plan_enrolments', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('flight_plan_id');
            $table->unsignedInteger('enrolment_id');
            $table->timestamps();

            $table->foreign('flight_plan_id')->references('id')->on('flight_plans');
            $table->foreign('enrolment_id')->references('id')->on('enrolments');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('flight_plan_enrolments');
    }
}
