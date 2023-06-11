<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Subrub;
use App\Models\Slider;

class City extends Model
{
    use HasFactory;
    protected $table = 'cities';
    protected $fillable = [
        'city_name','seo_title','seo_description','seo_keywords',
    ];

    public function suburb() 
    {
    return $this->hasMany(Suburb::class);
    }

    public function sliders() 
    {
    return $this->belongsTo(Slider::class);
    }
}
