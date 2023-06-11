<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SiteFee extends Model
{
    use HasFactory;
    protected $table = 'sitefees';

    protected $fillable = [
        'sitefees_content',
        'meta_title',
        'meta_description',
        'meta_keywords',
    ];
}
