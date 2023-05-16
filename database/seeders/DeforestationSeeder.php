<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DeforestationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $chunkSize = 500; // Number of chunks to process at a time
        $batchSize = 100; // Number of records to insert at a time

        $totalRecords = DB::connection('pgsql2')->table('deforestation')->count();
        $totalChunks = ceil($totalRecords / $chunkSize);

        for ($i = 0; $i < $totalChunks; $i++) {
            $offset = $i * $chunkSize;

            $chunk = DB::connection('pgsql2')->table('deforestation')
                ->orderBy('id')
                ->offset($offset)
                ->limit($chunkSize)
                ->get();

            $insertData = [];

            foreach ($chunk as $user) {
                $insertData[] = [
                    'id' => $user->id,
                    'process_id'=>$user->process_id,
                    'area'=>$user->area,
                    'year'=>$user->year,
                    'geom'=>$user->geom
                ];

                if (count($insertData) === $batchSize) {
                    DB::connection('pgsql')->table('deforestation')->insert($insertData);
                    $insertData = [];
                }
            }

            if (count($insertData) > 0) {
                DB::connection('pgsql')->table('deforestation')->insert($insertData);
            }
        }
    }
}