<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            RolesAndPermissionsSeeder::class,
            UsersSeeder::class,
            CountrySeeder::class,
            StateSeeder::class,
            CitySeeder::class,
            RegionSeeder::class,
            LivetrackerSeeder::class,
            AttackSeeder::class,
            HashtagSeeder::class,
            BarcodeSeeder::class,
            CelebritySeeder::class,
            MediaSeeder::class,
            BrandSeeder::class,
        ]);
    }
}
