<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hashtag extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function attrs()
    {
        return [
            'name'              => 'Name',
            'first_letter'      => 'First Letter',
            'language'          => 'Language',
        ];
    }

    public static function rules($update = false, $id = null)
    {
        $common = [
            'name'              => 'required|min:1|max:100',
            'first_letter'      => 'nullable|min:1|max:3',
            'language'          => 'nullable|min:1|max:20',
        ];

        if ($update) {
            return $common;
        }

        return array_merge($common, [
            //
        ]);
    }
}
