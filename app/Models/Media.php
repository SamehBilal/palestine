<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Media extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = ['id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function attrs()
    {
        return [
            'name'              => 'Name',
            'salt'              => 'Salt',
            'mime'              => 'Mime',
            'size'              => 'Size',
            'dimention'         => 'Dimention',
            'alt'               => 'Alt',
            'title'             => 'Title',
            'caption'           => 'Caption',
            'user_id'           => 'User',
        ];
    }

    public static function rules($update = false, $id = null)
    {
        $common = [
            'name'              => 'required|min:1|max:100',
            'salt'              => 'nullable|min:1|max:20',
            'mime'              => 'nullable|min:1|max:20',
            'size'              => 'nullable|min:1|max:20',
            'dimention'         => 'nullable|min:1|max:20',
            'alt'               => 'nullable|min:1|max:70',
            'title'             => 'nullable|min:1|max:70',
            'caption'           => 'nullable|min:1|max:70',
            'user_id'           => 'nullable|exists:users,id',
        ];

        if ($update) {
            return $common;
        }

        return array_merge($common, [
            //
        ]);
    }
}
