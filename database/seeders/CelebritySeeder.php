<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CelebritySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('celebrities')->delete();
        $celebrities = [
            [ 'name' => 'Mohamed Sallam', 'ar_name' => 'ماكدونالدز',   'first_ar_letter' => 'م',   'first_letter' => 'm', 'words' => '', 'photo' => 'ms.webp', 'country_id' => 64],
            [ 'name' => 'Bassem Yossef',  'ar_name' => 'ماكدونالدز',   'first_ar_letter' => 'م',   'first_letter' => 'b', 'words' => '', 'photo' => 'by.webp', 'country_id' => 64],
            [ 'name' => 'Bassem Yossef',  'ar_name' => 'ماكدونالدز',   'first_ar_letter' => 'م',   'first_letter' => 'b', 'words' => '', 'photo' => 'by.webp', 'country_id' => 64],
            [ 'name' => 'Bassem Yossef',  'ar_name' => 'ماكدونالدز',   'first_ar_letter' => 'م',   'first_letter' => 'b', 'words' => '', 'photo' => 'by.webp', 'country_id' => 64],
            [ 'name' => 'Bassem Yossef',  'ar_name' => 'ماكدونالدز',   'first_ar_letter' => 'م',   'first_letter' => 'b', 'words' => '', 'photo' => 'by.webp', 'country_id' => 64],
            [ 'name' => 'Bassem Yossef',  'ar_name' => 'ماكدونالدز',   'first_ar_letter' => 'م',   'first_letter' => 'b', 'words' => '', 'photo' => 'by.webp', 'country_id' => 64],
            [ 'name' => 'Bassem Yossef',  'ar_name' => 'ماكدونالدز',   'first_ar_letter' => 'م',   'first_letter' => 'b', 'words' => '', 'photo' => 'by.webp', 'country_id' => 64],
            [ 'name' => 'Bassem Yossef',  'ar_name' => 'ماكدونالدز',   'first_ar_letter' => 'م',   'first_letter' => 'b', 'words' => '', 'photo' => 'by.webp', 'country_id' => 64],
            [ 'name' => 'Bassem Yossef',  'ar_name' => 'ماكدونالدز',   'first_ar_letter' => 'م',   'first_letter' => 'b', 'words' => '', 'photo' => 'by.webp', 'country_id' => 64],
            [ 'name' => 'Bassem Yossef',  'ar_name' => 'ماكدونالدز',   'first_ar_letter' => 'م',   'first_letter' => 'b', 'words' => '', 'photo' => 'by.webp', 'country_id' => 64],
        ];

        DB::table('celebrities')->insert($celebrities);
    }
}
