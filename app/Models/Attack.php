<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Attack extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = ['id'];

    public function regions()
    {
        return $this->hasOne(Region::class, 'id' ,'region_id');
    }

    public function attrs()
    {
        return [
            'total_deaths'                              => 'Total Deaths',
            'women_deaths'                              => 'Women Deaths',
            'children_deaths'                           => 'Children Deaths',
            'elders_deaths'                             => 'Elder Deaths',
            'total_injuries'                            => 'Total Injuries',
            'total_displaced'                           => 'Total Displaced',
            'losts'                                     => 'Losts',
            'total_destroyed_residential_units'         => 'Total Destroyed Residential Units',
            'other_side_deaths'                         => 'Other Side Deaths',
            'other_side_injuries'                       => 'Other Side Injuries',
            'duration'                                  => 'Duration',
            'date_of_occurance'                         => 'Date of Occurance',
            'region_id'                                 => 'Region',
        ];
    }

    public static function rules($update = false, $id = null)
    {
        $common = [
            'total_deaths'                              => 'required|numeric|gt:0',
            'women_deaths'                              => 'nullable|numeric|gt:0',
            'children_deaths'                           => 'nullable|numeric|gt:0',
            'elders_deaths'                             => 'nullable|numeric|gt:0',
            'total_injuries'                            => 'required|numeric|gt:0',
            'total_displaced'                           => 'nullable|numeric|gt:0',
            'total_destroyed_residential_units'         => 'nullable|numeric|gt:0',
            'losts'                                     => 'nullable|numeric|gt:0',
            'other_side_deaths'                         => 'nullable|numeric|gt:0',
            'other_side_injuries'                       => 'nullable|numeric|gt:0',
            'duration'                                  => 'nullable|numeric|gt:0',
            'date_of_occurance'                         => 'nullable|before:tomorrow',
            'region_id'                                 => 'nullable|exists:regions,id',
        ];

        if ($update) {
            return $common;
        }

        return array_merge($common, [
            //
        ]);
    }
}
