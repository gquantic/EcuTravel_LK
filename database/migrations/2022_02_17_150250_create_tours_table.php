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

            $table->string('driver');


            $table->timestamp('depart_time')->nullable();
            $table->timestamp('arrival_time')->nullable();

            $table->integer('adult_price');
            $table->integer('child_price');
            $table->integer('bag_price');

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