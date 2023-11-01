<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function State()
    {
        $this->hasMany(State::class);
    }

    public function attrs()
    {
        return [
            'code'          => 'Code',
            'name'          => 'Name',
            'nationality'   => 'Nationality',
            'phone_code'    => 'Phone Code',
        ];
    }

    public static function rules($update = false, $id = null)
    {
        $common = [
            'code'              => 'required|min:1|max:4',
            'name'              => 'required|min:1|max:70',
            'nationality'       => 'nullable|min:1|max:70',
            'phone_code'        => 'required|numeric',
        ];

        if ($update) {
            return $common;
        }

        return array_merge($common, [
            //
        ]);
    }
}
