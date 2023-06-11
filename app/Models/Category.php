<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\SubCategory;

class Category extends Model
{
    use HasFactory;
    protected $table = 'categories';
    protected $fillable = [
        'category_name','seo_title','image_file','seo_description','seo_keywords',
    ];

    public function subcategory() 
    {
    return $this->hasMany(SubCategory::class);
    }
}
