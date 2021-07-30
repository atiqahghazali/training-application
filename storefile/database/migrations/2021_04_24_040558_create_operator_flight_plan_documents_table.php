<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOperatorFlightPlanDocumentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('operator_flight_plan_documents', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('operator_id');
            $table->unsignedInteger('flight_plan_document_id');
            $table->string('document_path');
            $table->date('document_expired_date');
            $table->timestamps();

            $table->foreign('operator_id')->references('id')->on('operators');
            $table->foreign('flight_plan_document_id')->references('id')->on('flight_plan_documents');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('operator_flight_plan_documents');
    }
}
