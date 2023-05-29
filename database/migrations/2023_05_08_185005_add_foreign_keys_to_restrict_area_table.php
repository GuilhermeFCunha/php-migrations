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
        Schema::table('restrict_area', function (Blueprint $table) {
            $table->foreign(['process_id'], 'restrict_area_process_id_fkey')->references(['id'])->on('process');
            $table->foreign(['process_id'], 'restrict_area_process_id_fkey1')->references(['id'])->on('process');
            $table->foreign(['process_id'], 'restrict_area_process_id_fkey2')->references(['id'])->on('process');
            $table->foreign(['process_id'], 'restrict_area_process_id_fkey3')->references(['id'])->on('process');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('restrict_area', function (Blueprint $table) {
            $table->dropForeign('restrict_area_process_id_fkey');
            $table->dropForeign('restrict_area_process_id_fkey1');
            $table->dropForeign('restrict_area_process_id_fkey2');
            $table->dropForeign('restrict_area_process_id_fkey3');
        });
    }
};
