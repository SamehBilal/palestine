<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LivetrackerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('livetrackers')->delete();
        $livetrackers = [
            [
                'total_deaths'                          => 11208,
                'women_deaths'                          => 3027,
                'children_deaths'                       => 4506,
                'elders_deaths'                         => 678,
                'total_injuries'                        => 29500,
                'total_displaced'                       => 1600000,
                'total_destroyed_residential_units'     => 270000,
                'total_medical_deaths'                  => 234,
                'total_medical_injured'                 => 130,
                'total_hospitals_broken'                => 21,
                'total_clinics_broken'                  => 51,
                'total_ambulances_broken'               => 53,
                'total_ambulances_semi_broken'          => 60,
                'other_side_deaths'                     => 0,
                'other_side_injuries'                   => 0,
                'last_update'                           => date('2023-11-10 23:59:59'),
            ],
        ];

        DB::table('livetrackers')->insert($livetrackers);
    }
}
