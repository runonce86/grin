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
            $table->integer('box_id');
            $table->smallInteger('level');
            $table->timestamps();

            $table->foreign('box_id')->references('id')->on('boxes');
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
