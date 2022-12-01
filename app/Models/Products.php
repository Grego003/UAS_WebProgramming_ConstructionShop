<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_code',
        'categories_id',
        'product_name',
        'length',
        'link_tokopedia',
        'link_shopee',
        'src_img',
    ];

    public function Categories()
    {
        return $this->belongsTo(Categories::class, 'categories_id');
    }

    public function product_details()
    {
        $this->hasOne(ProductDetails::class, "product_code", "product_code");
    }
}
