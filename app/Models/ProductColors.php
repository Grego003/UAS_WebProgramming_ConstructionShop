<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use PhpParser\Node\Expr\FuncCall;

class ProductColors extends Model
{
    use HasFactory;

    protected $fillable = [
        'color_name',
    ];

    public function product_details()
    {
        $this->hasOne(ProductDetails::class, "color_id");
    }
}
