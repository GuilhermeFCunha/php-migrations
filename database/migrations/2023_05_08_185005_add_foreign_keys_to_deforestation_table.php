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
        Schema::table('deforestation', function (Blueprint $table) {
            $table->foreign(['process_id'], 'deforestation_process_id_fkey')->references(['id'])->on('process');
            $table->foreign(['process_id'], 'deforestation_process_id_fkey1')->references(['id'])->on('process');
            $table->foreign(['process_id'], 'deforestation_process_id_fkey2')->references(['id'])->on('process');
            $table->foreign(['process_id'], 'deforestation_process_id_fkey3')->references(['id'])->on('process');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('deforestation', function (Blueprint $table) {
            $table->dropForeign('deforestation_process_id_fkey');
            $table->dropForeign('deforestation_process_id_fkey1');
            $table->dropForeign('deforestation_process_id_fkey2');
            $table->dropForeign('deforestation_process_id_fkey3');
        });
    }
};
