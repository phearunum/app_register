<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Traits\HasRolesAndPermissions;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Hash;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable,HasRolesAndPermissions;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
            'email' ,
            'username',
            'password' ,
            'account_type',
            'first_name',
            'last_name',
            'phone',
            'province',
            'address',
            'status',
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
        'account_type' => 'boolean',
    ];

    public function setPasswordAttribute($value)
    {
    $this->attributes['password'] = bcrypt($value);
    }
    public function role()
    {
        return $this->belongsToMany(Role::class, 'role_user');
    }


    public function isAdmin()
    {
        return $this->account_type;
    }
}
