<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SoilsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $old_user = DB::connection('pgsql2')->table('soils')->get();

        // dd($old_user);
        foreach ($old_user as $user) {
            DB::connection('pgsql')->table('soils')->insert([
                'id'     => $user->id,
                'process_id'      =>$user->process_id,
                'area'      =>$user->area,
                'soil'      =>$user->year,
                'geom'      =>$user->geom
            ]);
}
    }
}
