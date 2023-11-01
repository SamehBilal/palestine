<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AttackSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('attacks')->delete();
        $attacks = [
            [
                'total_deaths'                          => 8796,
                'women_deaths'                          => 2290,
                'children_deaths'                       => 3648,
                'elders_deaths'                         => 0,
                'total_injuries'                        => 22219,
                'total_displaced'                       => 1400000,
                'total_destroyed_residential_units'     => 177781,
                'other_side_deaths'                     => 0,
                'other_side_injuries'                   => 0,
                'duration'                              => 5,
                'date_of_occurance'                     => now(),
                'region_id'                             => 1,
            ],
        ];

        DB::table('attacks')->insert($attacks);
    }
}
