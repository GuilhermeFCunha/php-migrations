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
        Schema::create('indigenous_land', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->integer('process_id')->nullable();
            $table->string('name', 255)->nullable();
            $table->string('ethnicity', 255)->nullable();
            $table->string('modality', 255)->nullable();
            $table->decimal('area', 10, 2)->nullable();
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
        Schema::dropIfExists('indigenous_land');
    }
};
