<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    public const ROLE_SUPER_ADMIN = 1;
    public const ROLE_ADMIN_1 = 2;
    public const ROLE_ADMIN_2 = 3;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    //Role Function
    public function isSuperAdmin()
    {
        return $this->role_id === self::ROLE_SUPER_ADMIN;
    }

    public function role()
    {
        return $this->belongsTo(Role::class);
    }

    public function articles() 
    {
        return $this->HasMany(Article::class);
    }

}
