<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_name',
        'created_at',
        'updated_at',
    ];

    public function products()
    {
        return $this->hasOne(products::class, 'categories_id');
    }
}