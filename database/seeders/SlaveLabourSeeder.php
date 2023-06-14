<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SlaveLabourSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $command = 'pg_restore -d postgres -U postgres --schema=public  /home/diogo/Documentos/Banco_Geo/slavelabour_dump.sql';

        // Execute the command
        exec($command);
    }
}
