<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $chunkSize = 500; // Number of chunks to process at a time
        $batchSize = 100; // Number of records to insert at a time

        $totalRecords = DB::connection('pgsql2')->table('camadas.car')->count();
        $totalChunks = ceil($totalRecords / $chunkSize);

        for ($i = 0; $i < $totalChunks; $i++) {
            $offset = $i * $chunkSize;

            $chunk = DB::connection('pgsql2')->table('camadas.car')
                ->orderBy('id')
                ->offset($offset)
                ->limit($chunkSize)
                ->get();

            $insertData = [];

            foreach ($chunk as $user) {
                $insertData[] = [
                    'id' => $user->id,
                    'code'=>$user->code,
                    'area'=>$user->area,
                    'status_id'=>$user->status_id,
                    'state'=>$user->state,
                    'city'=>$user->city,
                    'city_ibge'=>$user->city_ibge,
                    'mf'=>$user->mf,
                    'x'=>$user->x,
                    'y'=>$user->y,
                    'zone'=>$user->zone,
                    'geom'=>$user->geom
                ];

                if (count($insertData) === $batchSize) {
                    DB::connection('pgsql')->table('car')->insert($insertData);
                    $insertData = [];
                }
            }

            if (count($insertData) > 0) {
                DB::connection('pgsql')->table('car')->insert($insertData);
            }
        }
    }
}
