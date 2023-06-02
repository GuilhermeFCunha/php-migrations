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
        $command = 'pg_restore -d postgres -U postgres --schema=public /home/guilherme/Documents/prodes_dump.sql';

        // Execute the command
        exec($command);
    }
}
