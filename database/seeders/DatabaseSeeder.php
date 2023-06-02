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
            CarSeeder::class
            // ProcessSeeder::class,
            // DeforestationSeeder::class,
            // CarbonSeeder::class,
            // BurnScarsSeeder::class,
            // HeatFireSeeder::class,
            // LandUseClassificationSeeder::class,
            // RainHistorySeeder::class,
            // RestrictAreaSeeder::class,
            // RestrictAreaDocumentSeeder::class,
            // BiomesSeeder::class,
            // SoilsSeeder::class,
            // ConservationUnitSeeder::class,
            // IndigenousLandSeeder::class
        ]);
    }
}
