<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RainHistorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $command = 'pg_restore -d ppc_db_new -U postgres  /home/guilherme/Documents/Dump/Public_Dump/rainhistory_dump.sql';

        // Execute the command
        exec($command);
    }
}
