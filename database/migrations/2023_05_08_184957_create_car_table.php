<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('car', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->string('code')->unique('car_code_key');
            $table->decimal('area', 10, 2)->nullable();
            $table->integer('status_id')->nullable();
            $table->string('state')->nullable();
            $table->string('city')->nullable();
            $table->integer('city_ibge')->nullable();
            $table->integer('process_id')->nullable();
            $table->decimal('mf', 10, 2)->nullable();
            $table->decimal('x', 10, 5)->nullable();
            $table->decimal('y', 10, 5)->nullable();
            $table->integer('zone')->nullable();
            $table->geometry('geom')->nullable();
            $table->date('creation_date')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('car');
    }
};
