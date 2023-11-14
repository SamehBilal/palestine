<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Livetracker extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = ['id'];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'last_update' => 'datetime',
    ];

    public function attrs()
    {
        return [
            'total_deaths'                              => 'Total Deaths',
            'women_deaths'                              => 'Women Deaths',
            'children_deaths'                           => 'Children Deaths',
            'elders_deaths'                             => 'Elder Deaths',
            'total_injuries'                            => 'Total Injuries',
            'total_displaced'                           => 'Total Displaced',
            'total_destroyed_residential_units'         => 'Total Destroyed Residential Units',
            'total_medical_deaths'                      => 'Total medical Deaths',
            'total_medical_injured'                     => 'Total medical Injured',
            'total_hospitals_broken'                    => 'Total Broken Hospitals',
            'total_clinics_broken'                      => 'Total Broken Clinics',
            'total_ambulances_broken'                   => 'Total Broken Ambulances',
            'total_ambulances_semi_broken'              => 'Total Semi Broken Ambulances',
            'other_side_deaths'                         => 'Other Side Deaths',
            'other_side_injuries'                       => 'Other Side Injuries',
            'last_update'                               => 'Last Update',
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
            'total_medical_deaths'                      => 'nullable|numeric|gt:0',
            'total_medical_injured'                     => 'nullable|numeric|gt:0',
            'total_hospitals_broken'                    => 'nullable|numeric|gt:0',
            'total_clinics_broken'                      => 'nullable|numeric|gt:0',
            'total_ambulances_broken'                   => 'nullable|numeric|gt:0',
            'total_ambulances_semi_broken'              => 'nullable|numeric|gt:0',
            'other_side_deaths'                         => 'nullable|numeric|gt:0',
            'other_side_injuries'                       => 'nullable|numeric|gt:0',
            'last_update'                               => 'required|date_format:Y-m-d g:i A|before:tomorrow',
        ];

        if ($update) {
            return $common;
        }

        return array_merge($common, [
            //
        ]);
    }
}
