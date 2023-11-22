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
                'total_deaths'                          => 12918,//11470+197
                'women_deaths'                          => 3250,//3155
                'children_deaths'                       => 5350,//4707
                'elders_deaths'                         => 695,//686
                'total_injuries'                        => 32850,//29000
                'total_displaced'                       => 1600000,
                'total_destroyed_residential_units'     => 280000,//276000
                'total_medical_deaths'                  => 241,//234
                'total_medical_injured'                 => 220,//130
                'total_hospitals_broken'                => 26,//21
                'total_clinics_broken'                  => 52,//51
                'total_ambulances_broken'               => 53,
                'total_ambulances_semi_broken'          => 60,
                'other_side_deaths'                     => 0,
                'other_side_injuries'                   => 0,
                'last_update'                           => date('2023-11-20 23:59:59'),
            ],
        ];

        DB::table('livetrackers')->insert($livetrackers);
    }
}
