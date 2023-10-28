<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attack extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public static function rules($update = false, $id = null)
    {
        $common = [
            'status'        => 'nullable',Rule::in(['active','inactive']),
            'payment'       => 'nullable',Rule::in(['cash','visa']),
        ];

        if ($update) {
            return $common;
        }

        return array_merge($common, [
            //
        ]);
    }
}
