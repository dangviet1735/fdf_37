<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Price extends Model
{
    protected $fillable = [
        'id', 
        'original_price', 
        'discount', 
        'unit_price',
    ];

    public function priceProducts() 
    {
        return $this->hasMany(PriceProduct::class);
    }
}

