<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Celebrity extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = ['id'];

    public function attrs()
    {
        return [
            'ar_name'           => 'Arabic Name',
            'name'              => 'Name',
            'first_ar_letter'   => 'First Arabic Letter',
            'first_letter'      => 'First Letter',
            'photo'             => 'Photo',
            'words'             => 'Words',
            'country_id'        => 'Country',
        ];
    }

    public static function rules($update = false, $id = null)
    {
        $common = [
            'name'              => 'required|min:3|max:70',
            'ar_name'           => 'required|min:3|max:70',
            'first_letter'      => 'nullable|min:1|max:3',
            'first_ar_letter'   => 'nullable|min:1|max:3',
            'words'             => 'nullable|min:1',
            'photo'             => 'nullable|image|mimes:jpeg,jpg,png,gif,webp|max:2048',
            'country_id'        => 'nullable|exists:countries,id',
        ];

        if ($update) {
            return $common;
        }

        return array_merge($common, [
            //
        ]);
    }
}
