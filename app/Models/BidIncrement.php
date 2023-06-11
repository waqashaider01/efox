<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BidIncrement extends Model
{
    use HasFactory;

    protected $table = 'bid_increments';

    protected $fillable = [
        'prices',
        'Increments',
        'delete_status',
    ];
}
