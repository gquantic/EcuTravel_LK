<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStoppingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stoppings', function (Blueprint $table) {
            $table->id();

            $table->string('locality');
            $table->string('name_of_the_stop_point');
            $table->string('address');
            $table->string('note_stopping')->nullable();
            $table->string('condition_stopping');

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
        Schema::dropIfExists('stoppings');
    }
}
