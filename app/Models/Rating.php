<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    protected $fillable = [
        'id' , 
        'user_id', 
        'product_id', 
        'point',
    ];

    public function product() 
    {
        return $this->belongsTo(Product::class);
    }

    public function user() 
    {
        return $this->belongsTo(User::class);
    }
}

