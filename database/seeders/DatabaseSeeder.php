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
            CarStatusSeeder::class,
            CarSeeder::class,
            ProcessSeeder::class,
            LandUseClassificationSeeder::class,
            DeforestationSeeder::class,
            SoilsSeeder::class,
            CarbonSeeder::class,
            BiomesSeeder::class,
            BurnScarsSeeder::class,
            HeatFireSeeder::class,
            LandUseLegendSeeder::class,
            RainHistorySeeder::class,
            RestrictAreaSeeder::class,
            RestrictAreaDocumentSeeder::class,
            ConservationUnitSeeder::class,
            IndigenousLandSeeder::class,
            SlaveLabourSeeder::class
        ]);
    }
}
