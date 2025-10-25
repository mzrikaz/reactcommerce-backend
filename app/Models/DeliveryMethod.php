<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DeliveryMethod extends Model
{

    protected $fillable = [
        'name',
        'expected_delivery_days',
        'price',
        'is_active'
    ];
}
