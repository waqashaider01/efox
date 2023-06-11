<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AuctionSetting extends Model
{
    use HasFactory;

    protected $table = 'auction_settings';

    protected $fillable = [
        'enable_status',
        'duration_options',
        'duration_days',
        'change_duration_status',
        'edit_schedule_status',
        'max_auto_relists',
        'snper_protection_seconds',
        'reserve_status',
        'quick_bid_status',
        'auto_bid_status',
        'bid_confirm_status',
    ];

    protected $casts = [
        'duration_days' => 'array'
    ];
}
