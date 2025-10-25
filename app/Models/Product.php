<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Product extends Model
{
    protected $fillable = [
        'name',
        'price',
        'image',
        'description',
        'stock',
        'rating',
    ];

    protected $appends = ['image_url'];

    protected $hidden = ['image'];

    protected function imageUrl(): Attribute
    {
        return Attribute::make(
            get: fn () => $this->image 
                ? Storage::url($this->image)
                : null,
        );
    }
}
