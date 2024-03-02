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
            [ 'total_deaths' => 301,    'women_deaths' => 3,    'children_deaths' => 70,     'elders_deaths' => 4,   'total_injuries' => 2860,   'total_displaced' => 1014,         'total_destroyed_residential_units' => 0,       'other_side_deaths' => 0, 'losts' => 0,    'other_side_injuries' => 0, 'duration' => 0, 'date_of_occurance' => date('2023-11-10 22:50:00'), 'region_id' => 1],
            //Gaza
            [ 'total_deaths' => 29195,  'women_deaths' => 8570, 'children_deaths' => 12660,  'elders_deaths' => 695, 'total_injuries' => 69170,  'total_displaced' => 2000000,   'total_destroyed_residential_units' => 306600,  'other_side_deaths' => 0, 'losts' => 9000, 'other_side_injuries' => 0, 'duration' => 0, 'date_of_occurance' => date('2023-11-10 22:50:00'), 'region_id' => 20],
            //Jenin
            [ 'total_deaths' => 76,     'women_deaths' => 2,    'children_deaths' => 9,     'elders_deaths' => 0,   'total_injuries' => 78,     'total_displaced' => 0,         'total_destroyed_residential_units' => 0,       'other_side_deaths' => 0, 'losts' => 0,    'other_side_injuries' => 0, 'duration' => 0, 'date_of_occurance' => date('2023-11-10 22:50:00'), 'region_id' => 9],
            //Bethlehem
            [ 'total_deaths' => 7,      'women_deaths' => 0,    'children_deaths' => 0,     'elders_deaths' => 0,   'total_injuries' => 4,      'total_displaced' => 0,         'total_destroyed_residential_units' => 0,       'other_side_deaths' => 0, 'losts' => 0,    'other_side_injuries' => 0, 'duration' => 0, 'date_of_occurance' => date('2023-11-10 22:50:00'), 'region_id' => 10],
            //Hebron
            [ 'total_deaths' => 37,     'women_deaths' => 0,    'children_deaths' => 1,     'elders_deaths' => 1,   'total_injuries' => 25,     'total_displaced' => 0,         'total_destroyed_residential_units' => 0,       'other_side_deaths' => 0, 'losts' => 0,    'other_side_injuries' => 0, 'duration' => 0, 'date_of_occurance' => date('2023-11-10 22:50:00'), 'region_id' => 16],
            //Tulkarm
            [ 'total_deaths' => 51,     'women_deaths' => 0,    'children_deaths' => 5,     'elders_deaths' => 1,   'total_injuries' => 12,     'total_displaced' => 0,         'total_destroyed_residential_units' => 0,       'other_side_deaths' => 0, 'losts' => 0,    'other_side_injuries' => 0, 'duration' => 0, 'date_of_occurance' => date('2023-11-10 22:50:00'), 'region_id' => 12],
            //Jerusalem
            [ 'total_deaths' => 23,     'women_deaths' => 0,    'children_deaths' => 3,     'elders_deaths' => 0,   'total_injuries' => 0,      'total_displaced' => 0,         'total_destroyed_residential_units' => 0,       'other_side_deaths' => 0, 'losts' => 0,    'other_side_injuries' => 0, 'duration' => 0, 'date_of_occurance' => date('2023-11-10 22:50:00'), 'region_id' => 22],
            //Ramallah
            [ 'total_deaths' => 26,     'women_deaths' => 1,    'children_deaths' => 2,     'elders_deaths' => 0,   'total_injuries' => 17,     'total_displaced' => 0,         'total_destroyed_residential_units' => 0,       'other_side_deaths' => 0, 'losts' => 0,    'other_side_injuries' => 0, 'duration' => 0, 'date_of_occurance' => date('2023-11-10 22:50:00'), 'region_id' => 5],
            //Nablus
            [ 'total_deaths' => 36,     'women_deaths' => 0,    'children_deaths' => 2,     'elders_deaths' => 2,   'total_injuries' => 3,      'total_displaced' => 0,         'total_destroyed_residential_units' => 0,       'other_side_deaths' => 0, 'losts' => 0,    'other_side_injuries' => 0, 'duration' => 0, 'date_of_occurance' => date('2023-11-10 22:50:00'), 'region_id' => 4],
            //Qalqilya
            [ 'total_deaths' => 10,      'women_deaths' => 0,    'children_deaths' => 1,     'elders_deaths' => 0,   'total_injuries' => 4,      'total_displaced' => 0,         'total_destroyed_residential_units' => 0,       'other_side_deaths' => 0, 'losts' => 0,    'other_side_injuries' => 0, 'duration' => 0, 'date_of_occurance' => date('2023-11-10 22:50:00'), 'region_id' => 26],
            //Tubas
            [ 'total_deaths' => 21,      'women_deaths' => 0,    'children_deaths' => 1,     'elders_deaths' => 0,   'total_injuries' => 5,      'total_displaced' => 0,         'total_destroyed_residential_units' => 0,       'other_side_deaths' => 0, 'losts' => 0,    'other_side_injuries' => 0, 'duration' => 0, 'date_of_occurance' => date('2023-11-10 22:50:00'), 'region_id' => 25],
            //Jericho
            [ 'total_deaths' => 7,      'women_deaths' => 0,    'children_deaths' => 0,     'elders_deaths' => 0,   'total_injuries' => 0,      'total_displaced' => 0,         'total_destroyed_residential_units' => 0,       'other_side_deaths' => 0, 'losts' => 0,    'other_side_injuries' => 0, 'duration' => 0, 'date_of_occurance' => date('2023-11-10 22:50:00'), 'region_id' => 23],
            //Salfit
            [ 'total_deaths' => 2,      'women_deaths' => 0,    'children_deaths' => 0,     'elders_deaths' => 0,   'total_injuries' => 0,      'total_displaced' => 0,         'total_destroyed_residential_units' => 0,       'other_side_deaths' => 0, 'losts' => 0,    'other_side_injuries' => 0, 'duration' => 0, 'date_of_occurance' => date('2023-11-10 22:50:00'), 'region_id' => 24],
        ];

        DB::table('attacks')->insert($attacks);
    }
}
