<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'id',
        'user_id',
        'total_price',
        'status',
        'date_checkout',
    ];

    public function product() 
    {
        return $this->hasOne(Product::class);
    }

    public function user() 
    {
        return $this->belongsTo(User::class);
    }
}

