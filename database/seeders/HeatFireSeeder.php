<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HeatFireSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $old_user = DB::connection('pgsql2')->table('heat_fire')->get();

        // dd($old_user);
        foreach ($old_user as $user) {
            DB::connection('pgsql')->table('heat_fire')->insert([
                'id'     => $user->id,
                'process_id'      =>$user->process_id,
                'total'      =>$user->total,
                'year'      =>$user->year,
                'geom'      =>$user->geom
            ]);
}
    }
}
