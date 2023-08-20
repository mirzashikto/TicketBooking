<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStopagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stopages', function (Blueprint $table) {
            $table->id('stopage_id');
            $table->string('name');
            $table->unsignedBigInteger('route_id');
            $table->foreign('route_id')->references('route_id')->on('routes');
            $table->integer('distance_from_start');
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
        Schema::dropIfExists('stopages');
    }
}
