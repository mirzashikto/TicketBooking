<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVehiclesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicles', function (Blueprint $table) {
            $table->id('vehicle_id');
            $table->string('name')->uniqid();
            $table->string('category');
            $table->unsignedBigInteger('route_id');
            $table->foreign('route_id')->references('route_id')->on('routes');
            $table->time('start_time', $precision = 0);
            $table->time('end_time', $precision = 0);
            $table->integer('price');
            $table->integer('total_seats');
            $table->string('description');
            $table->time('started_at');
            
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
        Schema::dropIfExists('vehicles');
    }
}
