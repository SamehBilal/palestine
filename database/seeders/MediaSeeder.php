<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MediaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('media')->delete();
        $media = [
            [
                'name'              => 'flag.webp',
                'salt'              => '1',
                'mime'              => '',
                'size'              => '',
                'dimention'         => '',
                'alt'               => 'flag',
                'title'             => 'flag',
                'caption'           => 'flag',
                'user_id'           => 1,
            ],
        ];

        DB::table('media')->insert($media);
    }
}
