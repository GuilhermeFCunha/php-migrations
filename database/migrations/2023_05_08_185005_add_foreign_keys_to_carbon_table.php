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
        Schema::table('carbon', function (Blueprint $table) {
            $table->foreign(['process_id'], 'carbon_process_id_fkey')->references(['id'])->on('process');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('carbon', function (Blueprint $table) {
            $table->dropForeign('carbon_process_id_fkey');
        });
    }
};
