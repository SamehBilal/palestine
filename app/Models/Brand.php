<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function attrs()
    {
        return [
            'name'              => 'Name',
            'logo'              => 'Logo',
            'first_letter'      => 'First Letter',
            'video'             => 'Video',
            'alternative_id'    => 'Alternative',
            'made_by'           => 'Made in',
        ];
    }

    public static function rules($update = false, $id = null)
    {
        $common = [
            'name'              => 'required|min:3|max:70',
            'logo'              => 'nullable|image|mimes:jpeg,jpg,png,gif,webp|max:2048',
            'first_letter'      => 'nullable|min:1|max:3',
            'video'             => 'nullable|image|mimes:jpeg,jpg,png,gif,webp|max:2048',
            'alternative_id'    => 'nullable|exists:brands,id',
            'made_by'           => 'nullable|exists:regions,id',
        ];

        if ($update) {
            return $common;
        }

        return array_merge($common, [
            //
        ]);
    }
}
