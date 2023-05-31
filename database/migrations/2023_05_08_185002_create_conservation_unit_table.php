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
        Schema::create('conservation_unit', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->integer('process_id')->nullable();
            $table->string('name', 200)->nullable();
            $table->string('category', 200)->nullable();
            $table->string('scope', 200)->nullable();
            $table->integer('creation_date')->nullable();
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
        Schema::dropIfExists('conservation_unit');
    }
};
