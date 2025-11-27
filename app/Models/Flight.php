<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Flight extends Model
{
    protected $fillable = [
        'route',
        'airline',
        'price',
        'duration',
        'is_active'
    ];

    protected $casts = [
        'is_active' => 'boolean'
    ];
}
