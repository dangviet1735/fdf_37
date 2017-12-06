<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PriceProduct extends Model
{
    protected $fillable = [
        'id', 
        'product_id', 
        'price_id', 
        'date',
    ];

    public function price() 
    {
        return $this->belongsTo(Price::class);
    }

    public function product() 
    {
        return $this->belongsTo(Product::class);
    }
}

