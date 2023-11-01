<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function City()
    {
        $this->hasMany(City::class);
    }

    public function Country()
    {
        $this->belongsTo(Country::class);
    }

    public function attrs()
    {
        return [
            'name'              => 'Name',
            'country_id'        => 'Country',
        ];
    }

    public static function rules($update = false, $id = null)
    {
        $common = [
            'name'              => 'required|min:3|max:70',
            'country_id'        => "nullable|exists:countries,id",
        ];

        if ($update) {
            return $common;
        }

        return array_merge($common, [
            //
        ]);
    }
}
