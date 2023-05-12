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
        Schema::table('car', function (Blueprint $table) {
            $table->foreign(['status_id'], 'car_status_id_fkey')->references(['id'])->on('car_status');
            $table->foreign(['status_id'], 'car_status_id_fkey1')->references(['id'])->on('car_status');
            $table->foreign(['status_id'], 'car_status_id_fkey2')->references(['id'])->on('car_status');
            $table->foreign(['status_id'], 'car_status_id_fkey3')->references(['id'])->on('car_status');
            $table->foreign(['status_id'], 'car_status_id_fkey4')->references(['id'])->on('car_status');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('car', function (Blueprint $table) {
            $table->dropForeign('car_status_id_fkey');
            $table->dropForeign('car_status_id_fkey1');
            $table->dropForeign('car_status_id_fkey2');
            $table->dropForeign('car_status_id_fkey3');
            $table->dropForeign('car_status_id_fkey4');
        });
    }
};
