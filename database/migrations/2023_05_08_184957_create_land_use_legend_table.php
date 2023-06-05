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
        Schema::create('land_use_legend', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->string('classe', 50)->nullable();
            $table->string('uid', 50)->nullable();
            $table->string('class', 50)->nullable();
            $table->string('hex_code', 50)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('land_use_legend');
    }
};
