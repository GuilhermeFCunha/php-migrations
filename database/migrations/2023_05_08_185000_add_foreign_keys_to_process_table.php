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
        Schema::table('process', function (Blueprint $table) {
            $table->foreign(['car_id'], 'process_car_id_fkey')->references(['id'])->on('car');
            $table->foreign(['car_id'], 'process_car_id_fkey1')->references(['id'])->on('car');
            $table->foreign(['car_id'], 'process_car_id_fkey2')->references(['id'])->on('car');
            $table->foreign(['car_id'], 'process_car_id_fkey3')->references(['id'])->on('car');
            $table->foreign(['car_id'], 'process_car_id_fkey4')->references(['id'])->on('car');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('process', function (Blueprint $table) {
            $table->dropForeign('process_car_id_fkey');
            $table->dropForeign('process_car_id_fkey1');
            $table->dropForeign('process_car_id_fkey2');
            $table->dropForeign('process_car_id_fkey3');
            $table->dropForeign('process_car_id_fkey4');
        });
    }
};
