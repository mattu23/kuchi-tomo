<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    protected $table = 'users';

    protected $fillable = [
        'name',
        'email',
        'password'
    ];

    protected $hidden = [
        'password',
    ];

    public function users()
    {
        return $this->hasMany(Shop::class);
    }

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }
}
