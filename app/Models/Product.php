<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';

    protected $fillable = [
        'images',
        'title_ar',
        'title_en',
        'desc_ar',
        'desc_en',
    ];

    protected $casts = [
        'images' => 'array'
    ];
}
