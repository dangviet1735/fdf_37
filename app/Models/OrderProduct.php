<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrderProduct extends Model
{
    protected $fillable = [
        'id', 
        'order_id' ,
        'product_id', 
        'amount',
    ];

    public function order() 
    {
        return $this->hasOne(Order::class);
    }

    public function product() 
    {
        return $this->belongsTo(Product::class);
    }
}

