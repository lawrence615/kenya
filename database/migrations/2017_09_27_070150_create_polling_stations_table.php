<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePollingStationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('polling_stations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('county_code');
            $table->string('constituency_code');
            $table->string('caw_code');
            $table->string('polling_station_code');
            $table->string('polling_station_name', 100);
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
        Schema::dropIfExists('polling_stations');
    }
}
