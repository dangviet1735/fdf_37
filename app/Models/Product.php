<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'id', 
        'name', 
        'description', 
        'image', 
        'quanity', 
        'rating', 
        'manufacturing_date', 
        'expiry_date', 
        'category_id', 
        'user_id',
        'status',
    ];

    public function priceProducts() 
    {
        return $this->hasMany(PriceProduct::class);
    }

    public function reviews() 
    {
        return $this->hasMany(Review::class);
    }

    public function orderProducts() 
    {
        return $this->hasMany(OrderProduct::class);
    }

    public function ratings() 
    {
        return $this->hasMany(Rating::class);
    }

    public function category() 
    {
        return $this->belongsTo(Category::class);
    }

    public function user() 
    {
        return $this->belongsTo(User::class);
    }
}

