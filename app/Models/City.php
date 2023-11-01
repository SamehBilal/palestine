<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function State()
    {
        $this->belongsTo(State::class);
    }

    public function attrs()
    {
        return [
            'name'              => 'Name',
            'state_id'          => 'State',
        ];
    }

    public static function rules($update = false, $id = null)
    {
        $common = [
            'name'              => 'required|min:3|max:70',
            'state_id'          => "nullable|exists:states,id",
        ];

        if ($update) {
            return $common;
        }

        return array_merge($common, [
            //
        ]);
    }
}
