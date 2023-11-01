<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SessionModel extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function attrs()
    {
        return [
            'user_id'           => 'User',
            'ip_address'        => 'IP Address',
            'user_agent'        => 'User Agent',
            'payload'           => 'Payload',
            'last_activity'     => 'Last Activity',
        ];
    }

    public static function rules($update = false, $id = null)
    {
        $common = [
            'user_id'           => 'nullable|exists:users,id',
            'ip_address'        => "nullable",
            'user_agent'        => "nullable|min:1|max:100",
            'payload'           => "required",
            'last_activity'     => "required|numeric",
        ];

        if ($update) {
            return $common;
        }

        return array_merge($common, [
            //
        ]);
    }
}
