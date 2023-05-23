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
        Schema::create('restrict_area', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->integer('process_id')->nullable();
            $table->string('name')->nullable();
            $table->string('document', 4)->nullable();
            $table->string('process_t')->nullable();
            $table->string('status', 30)->nullable();
            $table->decimal('area_sobre', 10, 0)->nullable();
            $table->decimal('area_total', 10, 0)->nullable();
            $table->string('year', 4)->nullable();
            $table->string('source', 30)->nullable();
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
        Schema::dropIfExists('restrict_area');
    }
};
