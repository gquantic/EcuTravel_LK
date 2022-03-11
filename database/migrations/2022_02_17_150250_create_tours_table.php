<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateToursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tours', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('route');
            $table->unsignedBigInteger('vehicle');

            $table->foreign('route')->references('id')->on('routes');
            $table->foreign('vehicle')->references('id')->on('vehicles');

            $table->string('route_number')->nullable();
            $table->string('route_depart_station')->nullable();
            $table->string('route_arrival_station')->nullable();

            $table->string('route_departure_address')->nullable();
            $table->string('route_arrival_address')->nullable();

            $table->string('vehicle_type')->nullable();
            $table->string('vehicle_model_vehicle')->nullable();
            $table->string('vehicle_gus_number_vehicle')->nullable();


            $table->string('driver');
            $table->string('driver_2')->nullable();

            $table->time('depart_time')->nullable();
            $table->time('arrival_time')->nullable();
            $table->timestamp('departure_date')->nullable();
            $table->timestamp('arrival_date')->nullable();

            $table->string('note_tours')->nullable();

            $table->string('condition_tours');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tours');
    }
}
