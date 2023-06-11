<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\City;

class Suburb extends Model
{
    use HasFactory;
    protected $table = 'suburbs';
    protected $fillable = [
        'city_id','suburb_name','seo_title','seo_description','seo_keywords',
    ];

    public function category() 
    {
    return $this->belongsTo(City::class);
    }
}
