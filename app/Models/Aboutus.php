<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aboutus extends Model
{
    use HasFactory;
    protected $table = 'aboutus';

    protected $fillable = [
        'aboutus_content',
        'meta_title',
        'meta_description',
        'meta_keywords',
    ];
}
