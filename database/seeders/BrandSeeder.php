<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('brands')->delete();
        $brands = [
            [
                'name'              => 'Mcdonald\'s',
                'logo'              => 'm.png',
                'first_letter'      => 'm',
                'video'             => 'palestine.gif',
                'alternative_id'    => 2,
                'made_by'           => 231,
            ],
            [
                'name'              => 'willy\'s kitchen',
                'logo'              => 'w.png',
                'first_letter'      => 'w',
                'video'             => 'palestine.gif',
                'alternative_id'    => 2,
                'made_by'           => 64,
            ],
        ];

        DB::table('brands')->insert($brands);
    }
}
