<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Livetracker extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function attrs()
    {
        return [
            'total_deaths'          => 'Total Deaths',
            'women_deaths'          => 'Women Deaths',
            'children_deaths'       => 'Children Deaths',
            'elders_deaths'         => 'Elder Deaths',
            'total_injuries'        => 'Total Injuries',
            'total_displaced'       => 'Total Displaced',
            'other_side_deaths'     => 'Other Side Deaths',
            'other_side_injuries'   => 'Other Side Injuries',
            'last_update'           => 'Last Update',
        ];
    }

    public static function rules($update = false, $id = null)
    {
        $common = [
            'total_deaths'          => 'required|numeric|gt:0',
            'women_deaths'          => 'nullable|numeric|gt:0',
            'children_deaths'       => 'nullable|numeric|gt:0',
            'elders_deaths'         => 'nullable|numeric|gt:0',
            'total_injuries'        => 'required|numeric|gt:0',
            'total_displaced'       => 'nullable|numeric|gt:0',
            'other_side_deaths'     => 'nullable|numeric|gt:0',
            'other_side_injuries'   => 'nullable|numeric|gt:0',
            'last_update'           => 'required|date_format:Y-m-d g:i A|before:tomorrow',
        ];

        if ($update) {
            return $common;
        }

        return array_merge($common, [
            //
        ]);
    }
}
