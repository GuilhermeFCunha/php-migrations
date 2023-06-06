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
            ConservationUnitSeeder::class,
            HeatFireSeeder::class,
            RestrictAreaSeeder::class,
            IndigenousLandSeeder::class,
            RestrictAreaDocumentSeeder::class,
            LandUseLegendSeeder::class,
            SlaveLabourSeeder::class,
            RainHistorySeeder::class
        ]);
    }
}
