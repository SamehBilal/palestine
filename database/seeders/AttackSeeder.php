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
            //West Bank
            [ 'total_deaths' => 183,    'women_deaths' => 0,    'children_deaths' => 0,     'elders_deaths' => 0,   'total_injuries' => 2500,   'total_displaced' => 0,         'total_destroyed_residential_units' => 0,       'other_side_deaths' => 0, 'losts' => 0,    'other_side_injuries' => 0, 'duration' => 0, 'date_of_occurance' => date('2023-11-10 22:50:00'), 'region_id' => 1],
            //Gaza
            [ 'total_deaths' => 11025,  'women_deaths' => 3027, 'children_deaths' => 4506,  'elders_deaths' => 678, 'total_injuries' => 27000,  'total_displaced' => 1600000,   'total_destroyed_residential_units' => 270000,  'other_side_deaths' => 0, 'losts' => 2700, 'other_side_injuries' => 0, 'duration' => 0, 'date_of_occurance' => date('2023-11-10 22:50:00'), 'region_id' => 20],
            //Jenin
            [ 'total_deaths' => 43,     'women_deaths' => 2,    'children_deaths' => 0,     'elders_deaths' => 0,   'total_injuries' => 34,     'total_displaced' => 0,         'total_destroyed_residential_units' => 0,       'other_side_deaths' => 0, 'losts' => 0,    'other_side_injuries' => 0, 'duration' => 0, 'date_of_occurance' => date('2023-11-10 22:50:00'), 'region_id' => 9],
            //Bethlehem
            [ 'total_deaths' => 3,      'women_deaths' => 0,    'children_deaths' => 0,     'elders_deaths' => 0,   'total_injuries' => 0,      'total_displaced' => 0,         'total_destroyed_residential_units' => 0,       'other_side_deaths' => 0, 'losts' => 0,    'other_side_injuries' => 0, 'duration' => 0, 'date_of_occurance' => date('2023-11-10 22:50:00'), 'region_id' => 10],
            //Hebron
            [ 'total_deaths' => 25,     'women_deaths' => 0,    'children_deaths' => 1,     'elders_deaths' => 1,   'total_injuries' => 25,     'total_displaced' => 0,         'total_destroyed_residential_units' => 0,       'other_side_deaths' => 0, 'losts' => 0,    'other_side_injuries' => 0, 'duration' => 0, 'date_of_occurance' => date('2023-11-10 22:50:00'), 'region_id' => 16],
            //Tulkarm
            [ 'total_deaths' => 33,     'women_deaths' => 0,    'children_deaths' => 5,     'elders_deaths' => 1,   'total_injuries' => 12,     'total_displaced' => 0,         'total_destroyed_residential_units' => 0,       'other_side_deaths' => 0, 'losts' => 0,    'other_side_injuries' => 0, 'duration' => 0, 'date_of_occurance' => date('2023-11-10 22:50:00'), 'region_id' => 12],
            //Jerusalem
            [ 'total_deaths' => 13,     'women_deaths' => 0,    'children_deaths' => 3,     'elders_deaths' => 0,   'total_injuries' => 0,      'total_displaced' => 0,         'total_destroyed_residential_units' => 0,       'other_side_deaths' => 0, 'losts' => 0,    'other_side_injuries' => 0, 'duration' => 0, 'date_of_occurance' => date('2023-11-10 22:50:00'), 'region_id' => 22],
            //Ramallah
            [ 'total_deaths' => 19,     'women_deaths' => 1,    'children_deaths' => 2,     'elders_deaths' => 0,   'total_injuries' => 13,     'total_displaced' => 0,         'total_destroyed_residential_units' => 0,       'other_side_deaths' => 0, 'losts' => 0,    'other_side_injuries' => 0, 'duration' => 0, 'date_of_occurance' => date('2023-11-10 22:50:00'), 'region_id' => 5],
            //Nablus
            [ 'total_deaths' => 22,     'women_deaths' => 0,    'children_deaths' => 2,     'elders_deaths' => 2,   'total_injuries' => 3,      'total_displaced' => 0,         'total_destroyed_residential_units' => 0,       'other_side_deaths' => 0, 'losts' => 0,    'other_side_injuries' => 0, 'duration' => 0, 'date_of_occurance' => date('2023-11-10 22:50:00'), 'region_id' => 4],
            //Qalqilya
            [ 'total_deaths' => 7,      'women_deaths' => 0,    'children_deaths' => 1,     'elders_deaths' => 0,   'total_injuries' => 4,      'total_displaced' => 0,         'total_destroyed_residential_units' => 0,       'other_side_deaths' => 0, 'losts' => 0,    'other_side_injuries' => 0, 'duration' => 0, 'date_of_occurance' => date('2023-11-10 22:50:00'), 'region_id' => 26],
            //Tubas
            [ 'total_deaths' => 2,      'women_deaths' => 0,    'children_deaths' => 0,     'elders_deaths' => 0,   'total_injuries' => 5,      'total_displaced' => 0,         'total_destroyed_residential_units' => 0,       'other_side_deaths' => 0, 'losts' => 0,    'other_side_injuries' => 0, 'duration' => 0, 'date_of_occurance' => date('2023-11-10 22:50:00'), 'region_id' => 25],
            //Jericho
            [ 'total_deaths' => 2,      'women_deaths' => 0,    'children_deaths' => 0,     'elders_deaths' => 0,   'total_injuries' => 0,      'total_displaced' => 0,         'total_destroyed_residential_units' => 0,       'other_side_deaths' => 0, 'losts' => 0,    'other_side_injuries' => 0, 'duration' => 0, 'date_of_occurance' => date('2023-11-10 22:50:00'), 'region_id' => 23],
        ];

        DB::table('attacks')->insert($attacks);
    }
}
