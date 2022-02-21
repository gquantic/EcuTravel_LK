<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoutesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('routes', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('user');

            $table->foreign('user')->references('id')->on('users');

            $table->string('route_type');
            $table->string('number_routes');

            $table->string('depart_station');
            $table->string('departure_address');
            $table->string('arrival_station');
            $table->string('arrival_address');

            $table->string('note_routes');


                        /** ^_^ **/
                        /** БАГАЖ **/
            $table->integer('basic_price');
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
//        Schema::dropIfExists('routes');
    }
}
