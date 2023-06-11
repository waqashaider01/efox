<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PrivacyPolicy extends Model
{
    use HasFactory;
    protected $table = 'privacy_policies';

    protected $fillable = [
        'privacypolicy_content',
        'meta_title',
        'meta_description',
        'meta_keywords',
    ];
}
