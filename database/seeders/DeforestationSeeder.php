<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DeforestationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $command = 'pg_restore -d ppc_db_new -U postgres  /home/guilherme/Documents/Dump/Public_Dump/deforestation_dump.sql';

        // Execute the command
        exec($command);
    }
}
