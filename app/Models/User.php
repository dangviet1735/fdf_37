<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 
        'username', 
        'email', 
        'address', 
        'phone', 
        'role',
    ];
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 
        'remember_token',
    ];

    public function orders() 
    {
        return $this->hasMany(Order::class);
    }

    public function ratings() 
    {
        return $this->hasMany(Rating::class);
    }

    public function products() 
    {
        return $this->hasMany(Product::class);
    }

    public function reviews() 
    {
        return $this->hasMany(Review::class);
    }
}

