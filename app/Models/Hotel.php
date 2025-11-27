<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    protected $fillable = [
        'name',
        'location',
        'rating',
        'reviews',
        'price',
        'image',
        'is_active'
    ];

    protected $casts = [
        'rating' => 'decimal:1',
        'is_active' => 'boolean'
    ];
}
