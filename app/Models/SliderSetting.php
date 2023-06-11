<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SliderSetting extends Model
{
    use HasFactory;
    protected $table = 'slider_settings';
    protected $fillable = [
        'slider_speed','slider_pause','visible_status','autoplay_status','mousehover_status',
    ];
}
