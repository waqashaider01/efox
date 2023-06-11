<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    use HasFactory;
    protected $table = 'banners';

    protected $fillable = [
        'banner_name','banner_image','adsence_code','categories','banner_slot',
        'paid_from','valid_until',
    ];

    protected $casts = [
        'categories' => 'array',
    ];
}
