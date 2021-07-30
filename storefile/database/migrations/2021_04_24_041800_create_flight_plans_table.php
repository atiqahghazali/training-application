<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFlightPlansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('flight_plans', function (Blueprint $table) {
            $table->increments('id');
            $table->uuid('uuid');
            $table->date('flight_date');
            $table->string('flight_time');
            $table->float('radius', 8, 2);
            $table->float('flight_height', 8, 2);
            $table->string('purpose');
            $table->unsignedInteger('operator_flight_plan_document_id');
            $table->timestamps();

            $table->foreign('operator_flight_plan_document_id')->references('id')->on('operator_flight_plan_documents');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('flight_plans');
    }
}
