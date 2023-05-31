<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class IndigenousLandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $old_user = DB::connection('pgsql2')->table('indigenous_land')->get();

        // dd($old_user);
        foreach ($old_user as $user) {
            DB::connection('pgsql')->table('indigenous_land')->insert([
                'id'     => $user->id,
                'process_id'      =>$user->process_id,
                'name'      =>$user->name,
                'ethinicity'      =>$user->ethinicity,
                'modality'      =>$user->modality,
                'area'      =>$user->area,
                'geom'      =>$user->geom
            ]);
}
    }
}
