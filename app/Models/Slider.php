<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\City;

class Slider extends Model
{
    use HasFactory;
    protected $table = 'sliders';
    protected $fillable = [
        'city_id','price','slider_image','slider_speed','slider_pause','visible_status','autoplay_status','mousehover_status','start_from','valid_until',
    ];

    public function city() 
    {
    return $this->belongsTo(City::class);
    }
}
