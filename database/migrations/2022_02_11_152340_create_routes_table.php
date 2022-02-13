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
            $table->unsignedBigInteger('driver');

            $table->foreign('user')->references('id')->on('users');
            $table->foreign('driver')->references('id')->on('drivers');

            $table->string('from');
            $table->string('destination');
            $table->timestamp('depart_time')->nullable();
            $table->timestamp('arrival_time')->nullable();

            $table->integer('adult_price');
            $table->integer('child_price');

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
        Schema::dropIfExists('routes');
    }
}
