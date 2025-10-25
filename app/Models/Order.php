<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'cart',
        'total',
        'status'
    ];

    protected function casts(): array
    {
        return [
            'cart' => 'array',
            'total' => 'decimal'
        ];
    }
}
