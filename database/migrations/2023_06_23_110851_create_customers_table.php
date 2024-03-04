<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            
            $table->id('customer_id');
            $table->string('username')->uniqid();
            $table->string('password');
            $table->string('name');
            $table->string('email');
            $table->string('phone');
            $table->string('house');
            $table->string('street');
            $table->string('area');
            $table->string('country');
            $table->integer('zip');
            $table->date('dob');
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
        Schema::dropIfExists('customers');
    }
}
