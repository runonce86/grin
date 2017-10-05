<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWateringCansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('watering_cans', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('box_id')->nullable();
            $table->integer('pot_id')->nullable();
            $table->smallInteger('level');
            $table->timestamps();

            $table->foreign('box_id')->references('id')->on('boxes');
            $table->foreign('pot_id')->references('id')->on('pots');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('watering_cans');
    }
}
