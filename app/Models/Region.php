<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function attrs()
    {
        return [
            'name'              => 'Name',
            'code'              => 'Code',
            'population'        => 'Population',
            'flag'              => 'Flag',
            'color'             => 'Color',
            'old'               => 'Old',
        ];
    }

    public static function rules($update = false, $id = null)
    {
        $common = [
            'name'              => 'required|min:1|max:70',
            'code'              => 'required|min:1|max:20',
            'population'        => 'nullable|numeric',
            'flag'              => 'nullable|image|mimes:jpeg,jpg,png,gif,webp|max:2048',
            'color'             => 'nullable|min:1|max:20',
            'old'               => 'required|boolean',
        ];

        if ($update) {
            return $common;
        }

        return array_merge($common, [
            //
        ]);
    }
}
