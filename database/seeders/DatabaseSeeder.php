<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            BurnScarsSeeder::class,
            CarSeeder::class,
            CarStatusSeeder::class,
            DeforestationSeeder::class,
            HeatFireSeeder::class,
            LandUseClassificationSeeder::class,
            ProcessSeeder::class,
            RainHistorySeeder::class,
            RestrictAreaSeeder::class,
            RestrictAreaDocumentSeeder::class,
            BiomesSeeder::class,
            SoilsSeeder::class
        ]);
    }
}
