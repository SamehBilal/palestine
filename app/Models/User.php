<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Validation\Rule;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function getAvatarlinkAttribute()
    {
        return "/storage/users/{$this->id}/{$this->avatar}";
    }

    public static function rules($update = false, $id = null)
    {
        $common = [
            'first_name'    => "nullable|min:3|max:20",
            'last_name'     => "nullable|min:3|max:20",
            'full_name'     => "nullable|max:40",
            'email'         => "nullable|email|regex:/(.+)@(.+)\.(.+)/i|unique:users,email,$id",
            'password'      => 'nullable|confirmed',
            'other_email'   => "nullable|email|regex:/(.+)@(.+)\.(.+)/i|unique:users,other_email,$id",
            'phone'         => "nullable|numeric|min:11",
            'other_phone'   => "nullable|numeric|min:11",
            'gender'        => 'nullable',Rule::in(['Male','Female']),
            'religion'      => 'nullable',Rule::in(['Islam','Christianity']),
            'date_of_birth' => "nullable|date_format:Y-m-d|before:today",
            'avatar'        => 'nullable|image|mimes:jpeg,jpg,png,gif|max:10000'
        ];

        if ($update) {
            return $common;
        }

        return array_merge($common, [
            'email'         => 'nullable|email|regex:/(.+)@(.+)\.(.+)/i|max:255|unique:users',
            'password'      => 'required|confirmed|min:8',
        ]);
    }
}
