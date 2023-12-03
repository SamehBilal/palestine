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
                'total_deaths'                          => 15455,//15207+248
                'women_deaths'                          => 4260,//3250
                'children_deaths'                       => 6405,//5350
                'elders_deaths'                         => 699,//699
                'total_injuries'                        => 43510,//32850
                'total_displaced'                       => 1600000,
                'total_destroyed_residential_units'     => 290000,//280000
                'total_medical_deaths'                  => 306,//241
                'total_medical_injured'                 => 220,//130
                'total_hospitals_broken'                => 26,//21
                'total_clinics_broken'                  => 52,//52
                'total_ambulances_broken'               => 56,
                'total_ambulances_semi_broken'          => 60,
                'other_side_deaths'                     => 0,
                'other_side_injuries'                   => 0,
                'last_update'                           => date('2023-12-02 23:59:59'),
            ],
        ];

        DB::table('livetrackers')->insert($livetrackers);
    }
}
