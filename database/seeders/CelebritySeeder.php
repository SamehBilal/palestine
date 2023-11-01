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
            [
                'name'              => 'Mohamed Sallam',
                'photo'             => 'ms.webp',
                'country_id'        => 64,
            ],
        ];

        DB::table('celebrities')->insert($celebrities);
    }
}
