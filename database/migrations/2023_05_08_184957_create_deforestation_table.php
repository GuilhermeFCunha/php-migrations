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
        Schema::create('deforestation', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('process_id')->nullable();
            $table->decimal('area_overlap', 10, 2)->nullable();
            $table->decimal('area_total', 10, 2)->nullable();
            $table->year('year')->nullable();
            $table->string('source')->nullable();
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
        Schema::dropIfExists('deforestation');
    }
};
