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
            $table->decimal('area', 10, 0)->nullable();
            $table->integer('status_id')->nullable();
            $table->string('state')->nullable();
            $table->string('city')->nullable();
            $table->integer('city_ibge')->nullable();
            $table->geometry('geom')->nullable();
            $table->string('zona', 2)->nullable();
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
