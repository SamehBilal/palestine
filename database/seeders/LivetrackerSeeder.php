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
                'total_deaths'                          => 29496,//19453+301
                'women_deaths'                          => 8573,//6203
                'children_deaths'                       => 12730,//8070
                'elders_deaths'                         => 699,//699
                'total_injuries'                        => 72030,//55446
                'total_displaced'                       => 2001014,//1900000
                'total_destroyed_residential_units'     => 306600,//290000
                'total_medical_deaths'                  => 345,//306
                'total_medical_injured'                 => 220,//220
                'total_hospitals_broken'                => 26,//21
                'total_clinics_broken'                  => 53,//52
                'total_ambulances_broken'               => 102,
                'total_ambulances_semi_broken'          => 60,
                'other_side_deaths'                     => 0,
                'other_side_injuries'                   => 0,
                'last_update'                           => date('2024-02-19 23:59:59'),
            ],
        ];

        DB::table('livetrackers')->insert($livetrackers);
    }
}
