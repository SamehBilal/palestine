<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarcodeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('barcodes')->delete();
        $barcodes = [
            [
                'name'         => 'Israel Barcodes',
                'photo'        => 'israel.webp',
            ],
            [
                'name'         => 'USA Barcodes',
                'photo'        => 'usa.webp',
            ],
        ];

        DB::table('barcodes')->insert($barcodes);
    }
}
