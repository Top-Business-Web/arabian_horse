<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;

    protected $table = 'settings';

    protected $fillable = [
        'logo',
        'email',
        'phone',
        'address_ar',
        'address_en',
        'desc_about_ar',
        'desc_about_en',
        'link_youtube',
        'image',
        'instagram',
        'linkedin',
        'twitter',
        'facebook',
    ];
}
