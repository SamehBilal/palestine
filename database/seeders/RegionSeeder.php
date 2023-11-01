<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RegionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('regions')->delete();
        $regions = [
            [
                'name'              => 'West Bank',
                'code'              => 'PS-WSB',
                'population'        => '9794525',
                'flag'              => 'palestine.webp',
                'color'             => 'blue',
                'old'               => 1,
            ],
            [
                'name'              => 'Jaffa',
                'code'              => 'PS-JFA',
                'population'        => '9794525',
                'flag'              => 'palestine.webp',
                'color'             => 'blue',
                'old'               => 1,
            ],
            [
                'name'              => 'Nazaeth',
                'code'              => 'PS-NAZ',
                'population'        => '5769750',
                'flag'              => 'palestine.webp',
                'color'             => 'blue',
                'old'               => 1,
            ],
            [
                'name'              => 'Nablus',
                'code'              => 'PS-NBS',
                'population'        => '5769750',
                'flag'              => 'palestine.webp',
                'color'             => 'blue',
                'old'               => 1,
            ],
            [
                'name'              => 'Ramallah',
                'code'              => 'PS-RBH',
                'population'        => '5769750',
                'flag'              => 'palestine.webp',
                'color'             => 'blue',
                'old'               => 1,
            ],
            [
                'name'              => 'Dead Sea',
                'code'              => 'PS-DS',
                'population'        => '5769750',
                'flag'              => 'palestine.webp',
                'color'             => 'blue',
                'old'               => 1,
            ],
            [
                'name'              => 'Allyd',
                'code'              => 'PS-ALD',
                'population'        => '5769750',
                'flag'              => 'palestine.webp',
                'color'             => 'blue',
                'old'               => 1,
            ],
            [
                'name'              => 'Safad',
                'code'              => 'PS-SAF',
                'population'        => '5769750',
                'flag'              => 'palestine.webp',
                'color'             => 'blue',
                'old'               => 1,
            ],
            [
                'name'              => 'Jenin',
                'code'              => 'PS-JEN',
                'population'        => '5769750',
                'flag'              => 'palestine.webp',
                'color'             => 'blue',
                'old'               => 1,
            ],
            [
                'name'              => 'Bethlehem',
                'code'              => 'PS-BTH',
                'population'        => '5769750',
                'flag'              => 'palestine.webp',
                'color'             => 'blue',
                'old'               => 1,
            ],
            [
                'name'              => 'Acre',
                'code'              => 'PS-ACE',
                'population'        => '5769750',
                'flag'              => 'palestine.webp',
                'color'             => 'blue',
                'old'               => 1,
            ],
            [
                'name'              => 'Tulkarm',
                'code'              => 'PS-TKM',
                'population'        => '5769750',
                'flag'              => 'palestine.webp',
                'color'             => 'blue',
                'old'               => 1,
            ],
            [
                'name'              => 'Baysan',
                'code'              => 'PS-BSN',
                'population'        => '5769750',
                'flag'              => 'palestine.webp',
                'color'             => 'blue',
                'old'               => 1,
            ],
            [
                'name'              => 'Tiberias',
                'code'              => 'PS-TBA',
                'population'        => '5769750',
                'flag'              => 'palestine.webp',
                'color'             => 'blue',
                'old'               => 1,
            ],
            [
                'name'              => 'Lake Tiberias',
                'code'              => 'PS-LTB',
                'population'        => '5769750',
                'flag'              => 'palestine.webp',
                'color'             => 'blue',
                'old'               => 1,
            ],
            [
                'name'              => 'Hebron',
                'code'              => 'PS-HBN',
                'population'        => '5769750',
                'flag'              => 'palestine.webp',
                'color'             => 'blue',
                'old'               => 1,
            ],
            [
                'name'              => 'Beersheba',
                'code'              => 'PS-BSB',
                'population'        => '5769750',
                'flag'              => 'palestine.webp',
                'color'             => 'blue',
                'old'               => 1,
            ],
            [
                'name'              => 'Khan Yunis',
                'code'              => 'PS-KYS',
                'population'        => '5769750',
                'flag'              => 'palestine.webp',
                'color'             => 'blue',
                'old'               => 1,
            ],
            [
                'name'              => 'Alramlah',
                'code'              => 'PS-ALR',
                'population'        => '5769750',
                'flag'              => 'palestine.webp',
                'color'             => 'blue',
                'old'               => 1,
            ],
            [
                'name'              => 'Gaza',
                'code'              => 'PS-GZA',
                'population'        => '5769750',
                'flag'              => 'palestine.webp',
                'color'             => 'blue',
                'old'               => 1,
            ],
            [
                'name'              => 'Haifa',
                'code'              => 'PS-HFA',
                'population'        => '5769750',
                'flag'              => 'palestine.webp',
                'color'             => 'blue',
                'old'               => 1,
            ],
            [
                'name'              => 'Jerusalem',
                'code'              => 'PS-JEM',
                'population'        => '5769750',
                'flag'              => 'palestine.webp',
                'color'             => 'blue',
                'old'               => 1,
            ],
            [
                'name'              => 'Jericho',
                'code'              => 'PS-JRH',
                'population'        => '5769750',
                'flag'              => 'palestine.webp',
                'color'             => 'blue',
                'old'               => 1,
            ],
            [
                'name'              => 'Salfit',
                'code'              => 'PS-SLT',
                'population'        => '5769750',
                'flag'              => 'palestine.webp',
                'color'             => 'blue',
                'old'               => 1,
            ],
            [
                'name'              => 'Tubas',
                'code'              => 'PS-TBS',
                'population'        => '5769750',
                'flag'              => 'palestine.webp',
                'color'             => 'blue',
                'old'               => 1,
            ],
            [
                'name'              => 'Qalqilya',
                'code'              => 'PS-QQA',
                'population'        => '5769750',
                'flag'              => 'palestine.webp',
                'color'             => 'blue',
                'old'               => 1,
            ],
            [
                'name'              => 'Deir El Balah',
                'code'              => 'PS-DEB',
                'population'        => '5769750',
                'flag'              => 'palestine.webp',
                'color'             => 'blue',
                'old'               => 1,
            ],
            [
                'name'              => 'North Gaza',
                'code'              => 'PS-NGZ',
                'population'        => '5769750',
                'flag'              => 'palestine.webp',
                'color'             => 'blue',
                'old'               => 1,
            ],
            [
                'name'              => 'Rafah',
                'code'              => 'PS-RFH',
                'population'        => '5769750',
                'flag'              => 'palestine.webp',
                'color'             => 'blue',
                'old'               => 1,
            ],
        ];

        DB::table('regions')->insert($regions);
    }
}
