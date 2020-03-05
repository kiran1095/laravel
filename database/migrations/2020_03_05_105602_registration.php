<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Registration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('register',function(Blueprint $table){
            $table->bigIncrements('id');
            $table->string('name')->nullable(false);
            $table->string('email')->unique()->nullable(false);
            $table->string('password')->nullable(false);
            $table->string('phone')->unique()->nullable(false);
            $table->string('age')->nullable(false);
            $table->string('gender')->nullable(false);
            $table->timeStamps();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::DROP('register');
    }
}
