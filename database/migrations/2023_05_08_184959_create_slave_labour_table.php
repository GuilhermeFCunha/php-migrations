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
        Schema::create('slave_labour', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->string('name')->nullable();
            $table->string('farm')->nullable();
            $table->string('state', 4)->nullable();
            $table->string('document', 18)->nullable();
            $table->string('process_t')->nullable();
            $table->string('workers_involved', 4)->nullable();
            $table->string('status', 30)->nullable();
            $table->string('year', 4)->nullable();
            $table->string('inclusion_date', 70)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('slave_labour');
    }
};
