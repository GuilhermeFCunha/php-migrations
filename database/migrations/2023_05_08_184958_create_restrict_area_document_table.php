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
        Schema::create('restrict_area_document', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->string('name')->nullable();
            $table->string('document', 18)->nullable();
            $table->string('process_t')->nullable();
            $table->string('status', 30)->nullable();
            $table->year('year')->nullable();
            $table->string('state')->nullable();
            $table->string('city')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('restrict_area_document');
    }
};
