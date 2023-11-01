<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HashtagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('hashtags')->delete();
        $hashtags = [
            [
                'name'          => '#Gaza',
                'first_letter'  => 'g',
                'language'      => 'English',
            ],
        ];

        DB::table('hashtags')->insert($hashtags);
    }
}
