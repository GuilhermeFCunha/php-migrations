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
        Schema::create('process', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->integer('car_id')->nullable();
            $table->boolean('car_overlap')->nullable();
            $table->decimal('car_overlap_area', 10, 0)->nullable();
            $table->boolean('deforestation')->nullable();
            $table->decimal('desflorestation_area_since_2008', 10, 0)->nullable();
            $table->boolean('restrict_area')->nullable();
            $table->string('restrict_area_year', 4)->nullable();
            $table->decimal('restrict_area_area', 10, 0)->nullable();
            $table->boolean('heat_fire')->nullable();
            $table->integer('heat_fire_total')->nullable();
            $table->boolean('indigenous_land')->nullable();
            $table->boolean('conservation_unit')->nullable();
            $table->decimal('carbon_area', 10, 0)->nullable();
            $table->string('soil_types')->nullable();
            $table->decimal('burn_scars', 10, 0)->nullable();
            $table->decimal('rain_history', 10, 0)->nullable();
            $table->string('biomes')->nullable();
            $table->timestamp('created_at')->nullable()->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('process');
    }
};
