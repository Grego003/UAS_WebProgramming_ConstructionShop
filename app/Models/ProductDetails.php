<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductDetails extends Model
{
    use HasFactory;

    protected $fillable = [
        'color_id',
        'product_code',
        'price',
    ];

    public function products()
    {
        return $this->belongsTo(Products::class, "product_code", "product_code");
    }

    public function products_colors()
    {
        return $this->belongsTo(ProductColors::class, "color_id");
    }
}
