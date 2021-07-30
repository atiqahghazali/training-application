<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFlightPlanDocumentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('flight_plan_documents', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('operation_type_id');
            $table->string('document_name');
            $table->timestamps();

            $table->foreign('operation_type_id')->references('id')->on('type_of_operations');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('flight_plan_documents');
    }
}
