<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ConservationUnitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $old_user = DB::connection('pgsql2')->table('conservation_unit')->get();

        // dd($old_user);
        foreach ($old_user as $user) {
            DB::connection('pgsql')->table('conservation_unit')->insert([
                'id'     => $user->id,
                'process_id'      =>$user->process_id,
                'name'      =>$user->name,
                'category'      =>$user->category,
                'scope'      =>$user->scope,
                'creation_date'      =>$user->creation_date,
                'area'      =>$user->area,
                'geom'      =>$user->geom
            ]);
}
    }
}
