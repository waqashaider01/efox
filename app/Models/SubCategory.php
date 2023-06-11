<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;

class SubCategory extends Model
{
    use HasFactory;
    protected $table = 'sub_categories';
    protected $fillable = [
        'category_id','subcategory_name','seo_title','seo_description','seo_keywords',
    ];

    public function category() 
    {
    return $this->belongsTo(Category::class);
    }
}
