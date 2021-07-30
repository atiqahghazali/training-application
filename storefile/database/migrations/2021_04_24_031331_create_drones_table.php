<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDronesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('drones', function (Blueprint $table) {
            $table->increments('id');
            $table->uuid('uuid');
            $table->string('name');
            $table->string('brand');
            $table->unsignedInteger('category_id');
            $table->unsignedInteger('class_id');
            $table->string('serial_number');
            $table->float('weight', 8, 2);
            $table->float('length', 8, 2);
            $table->float('wingspan', 8, 2);
            $table->float('power_source', 8, 2);
            $table->float('maximum_flight_duration', 8, 2);
            $table->float('maximum_speed', 8, 2);
            $table->float('maximum_height_capable', 8, 2);
            $table->float('maximum_distance_capable', 8, 2);
            $table->float('frequency_used', 8, 2);
            $table->float('output_power', 8, 2);
            $table->unsignedInteger('user_id');
            $table->string('status');
            $table->string('remarks');
            $table->timestamps();

            $table->foreign('category_id')->references('id')->on('drone_categories');
            $table->foreign('class_id')->references('id')->on('drone_classes');
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('drones');
    }
}
