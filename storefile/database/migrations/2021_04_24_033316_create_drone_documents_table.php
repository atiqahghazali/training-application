<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDroneDocumentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('drone_documents', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('drone_id');
            $table->string('MCMC_label_serial_number');
            $table->string('certificate_of_conformity');
            $table->string('special_approval_certificate');
            $table->string('special_approval_clearance_letter');
            $table->timestamps();

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
        Schema::dropIfExists('drone_documents');
    }
}
