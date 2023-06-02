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
        Schema::create('heat_fire', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->integer('process_id')->nullable();
            $table->integer('total')->nullable();
            $table->integer('year', 4)->nullable();
            $table->geometry('geom')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('heat_fire');
    }
};
