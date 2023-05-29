<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BiomesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $old_user = DB::connection('pgsql2')->table('biomes')->get();

        // dd($old_user);
        foreach ($old_user as $user) {
            DB::connection('pgsql')->table('biomes')->insert([
                'id'     => $user->id,
                'process_id'      =>$user->process_id,
                'area'      =>$user->area,
                'biome'      =>$user->year,
                'geom'      =>$user->geom
            ]);
}
    }
}
