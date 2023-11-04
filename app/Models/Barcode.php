<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Barcode extends Model
{
    use HasFactory, SoftDeletes;
    protected $guarded = ['id'];

    public function attrs()
    {
        return [
            'name'          => 'Name',
            'photo'         => 'Photo',
        ];
    }

    public static function rules($update = false, $id = null)
    {
        $common = [
            'name'          => 'required|min:3|max:70',
            'photo'         => 'nullable|image|mimes:jpeg,jpg,png,gif,webp|max:2048',
        ];

        if ($update) {
            return $common;
        }

        return array_merge($common, [
            //
        ]);
    }

}
