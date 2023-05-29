<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProcessSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $chunkSize = 500; // Number of chunks to process at a time
        $batchSize = 100; // Number of records to insert at a time

        $totalRecords = DB::connection('pgsql2')->table('process')->count();
        $totalChunks = ceil($totalRecords / $chunkSize);

        for ($i = 0; $i < $totalChunks; $i++) {
            $offset = $i * $chunkSize;

            $chunk = DB::connection('pgsql2')->table('process')
                ->orderBy('id')
                ->offset($offset)
                ->limit($chunkSize)
                ->get();

            $insertData = [];

            foreach ($chunk as $user) {
                $insertData[] = [
                    'id' => $user->id,
                    'car_id'=>$user->car_id,
                    'car_overlap'=>$user->car_overlap,
                    'car_overlap_area'=>$user->car_overlap_area,
                    'deforestation'=>$user->deforestation,
                    'deforestation_area_since_2008'=>$user->deforestation_area_since_2008,
                    'restrict_area'=>$user->restrict_area,
                    'restrict_area_year'=>$user->restrict_area_year,
                    'restrict_area_area'=>$user->restrict_area_area,
                    'heat_fire'=>$user->heat_fire,
                    'heat_fire_total'=>$user->heat_fire_total,
                    'indigenous_land'=>$user->indigenous_land,
                    'conservation_unit'=>$user->conservation_unit,
                    'carbon_area'=>$user->carbon_area,
                    'soil_types'=>$user->soil_types,
                    'burn_scars'=>$user->burn_scars,
                    'rain_history'=>$user->rain_history,
                    'biomes'=>$user->biome,
                    'created_at'=>$user->created_at

                ];

                if (count($insertData) === $batchSize) {
                    DB::connection('pgsql')->table('process')->insert($insertData);
                    $insertData = [];
                }
            }

            if (count($insertData) > 0) {
                DB::connection('pgsql')->table('process')->insert($insertData);
            }
        }
    }
}
