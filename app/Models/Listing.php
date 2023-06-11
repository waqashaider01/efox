<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Listing extends Model
{
    use HasFactory;
    protected $table = 'listings';
    protected $fillable = [
        'user_id',
        'category_id',
        'subcategory_id',
        'title',
        'listing_type',
        'listing_duration',
        'price',
        'start_date',
        'start_time',
        'quantity',
        'starting_price',
        'reserve_price',
        'color',
        'doors',
        'body_style',
        'mileage',
        'year',
        'condition',
        'transmission',
        'seller_type',
        'air_conditioned',
        'registered',
        'description',
        'image_1',
        'image_2',
        'image_3',
        'image_4',
        'image_5',
        'image_6',
        'image_7',
        'image_8',
        'image_9',
        'image_10',
        'city',
        'suburb',
        'name',
        'shipping',
        'payment_method',
        'category_page_free',
        'category_page_free_days',
        'category_featured_image',
        'category_featured_image_days',
        'home-page_featured',
        'home_page_featured_days',
        'homepage_slider_gallery',
        'homepage_slider_gallery_days',
        'tag_status',
    ];

    public function user() 
    {
    return $this->belongsTo(User::class);
    }
}
