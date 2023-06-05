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
            $table->string('document', 20)->nullable();
            $table->string('process_t')->nullable();
            $table->string('status', 30)->nullable();
            $table->decimal('overlap_area', 10, 2)->nullable();
            $table->decimal('total_area', 10, 2)->nullable();
            $table->year('year')->nullable();
            $table->string('source', 30)->nullable();
            $table->string('description', 255)->nullable();
            $table->string('num_tad', 50)->nullable();
            $table->string('data_tad', 30)->nullable();
            $table->string('property', 255)->nullable();
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
