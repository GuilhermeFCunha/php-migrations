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
        Schema::create('carbon', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->integer('process_id')->nullable();
        });
        DB::statement("ALTER TABLE land_use_classification ADD rast raster DEFAULT NULL");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('carbon');
    }
};
