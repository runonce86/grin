<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePotsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pots', function (Blueprint $table) {
            $table->increments('id');
            $table->smallInteger('box_id')->nullable();
            $table->string('name')->nullable();
            $table->smallInteger('humidity')->nullable();
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
        Schema::dropIfExists('pots');
    }
}
