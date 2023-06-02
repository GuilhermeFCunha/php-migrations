<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $command = 'pg_restore -d ppc_db_new -U postgres /home/guilherme/Documents/Dump/Public_Dump/car_dump.sql';

        // Execute the command
        exec($command);
    }
}
