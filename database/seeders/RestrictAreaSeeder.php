<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RestrictAreaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $old_user = DB::connection('pgsql2')->table('restrict_area')->get();

        // dd($old_user);
        foreach ($old_user as $user) {
            DB::connection('pgsql')->table('restrict_area')->insert([
                'id'     => $user->id,
                'process_id'      =>$user->process_id,
                'name'      =>$user->name,
                'document'      =>$user->document,
                'process_t'      =>$user->process_t,
                'status'      =>$user->status,
                'area_overlap'      =>$user->area_overlap,
                'area_total'      =>$user->area_total,
                'year'      =>$user->year,
                'source'      =>$user->source,
                'description'      =>$user->description,
                'geom'      =>$user->geom
            ]);
}
    }
}
