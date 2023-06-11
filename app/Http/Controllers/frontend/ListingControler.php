<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\SubCategory;
use App\Models\Suburb;
use App\Models\City;
use App\Models\Listing;
use Auth;


class ListingControler extends Controller
{
    public function productListing()
    {
        $categories = Category::all();
        $subcategories = SubCategory::all();
        $cities = City::all();
        $suburbs = Suburb::all();
        return view('frontend.product-listing', compact('categories', 'subcategories','cities','suburbs'));
    }

    public function createListing(Request $request){

        if($request->hasFile('image_1')){
            $extension = $request->image_1->extension();
            $imagefile1 = time().rand(1,1000)."_.".$extension;
            $request->image_1->move(public_path('frontend/images'), $imagefile1);      
        }

        if($request->hasFile('image_2')){
            $extension = $request->image_2->extension();
            $imagefile2 = time().rand(1,1000)."_.".$extension;
            $request->image_2->move(public_path('frontend/images'), $imagefile2);      
        }
        

        if($request->hasFile('image_3')){
            $extension = $request->image_3->extension();
            $imagefile3 = time().rand(1,1000)."_.".$extension;
            $request->image_3->move(public_path('frontend/images'), $imagefile3);      
        }
        

        if($request->hasFile('image_4')){
            $extension = $request->image_4->extension();
            $imagefile4 = time().rand(1,1000)."_.".$extension;
            $request->image_4->move(public_path('frontend/images'), $imagefile4);      
        }
        

        if($request->hasFile('image_5')){
            $extension = $request->image_5->extension();
            $imagefile5 = time().rand(1,1000)."_.".$extension;
            $request->image_5->move(public_path('frontend/images'), $imagefile5);      
        }
        

        if($request->hasFile('image_6')){
            $extension = $request->image_6->extension();
            $imagefile6 = time().rand(1,1000)."_.".$extension;
            $request->image_6->move(public_path('frontend/images'), $imagefile6);      
        }
        

        if($request->hasFile('image_7')){
            $extension = $request->image_7->extension();
            $imagefile7 = time().rand(1,1000)."_.".$extension;
            $request->image_7->move(public_path('frontend/images'), $imagefile7);      
        }
        

        if($request->hasFile('image_8')){
            $extension = $request->image_8->extension();
            $imagefile8 = time().rand(1,1000)."_.".$extension;
            $request->image_8->move(public_path('frontend/images'), $imagefile8);      
        }
        

        if($request->hasFile('image_9')){
            $extension = $request->image_9->extension();
            $imagefile9 = time().rand(1,1000)."_.".$extension;
            $request->image_9->move(public_path('frontend/images'), $imagefile9);      
        }
        

        if($request->hasFile('image_10')){
            $extension = $request->image_10->extension();
            $imagefile10 = time().rand(1,1000)."_.".$extension;
            $request->image_10->move(public_path('frontend/images'), $imagefile10);      
        }

        $user_id = Auth::user()->id ?? 1;
        $createListing = Listing::create([
        'user_id' => $user_id,
        'category_id' => $request->category,
        'subcategory_id' => $request->sub_category,
        'title' => $request->title,
        'listing_type' => $request->listing_type,
        'start_date' => $request->start_date,
        'start_time' => $request->start_time,
        'listing_duration' => $request->listing_duration,
        'price' => $request->price,
        'start_date' => $request->start_date,
        'start_time' => $request->start_time,
        'quantity' => $request->quantity,
        'starting_price' => $request->starting_price,
        'reserve_price' => $request->reserve_price,
        'color' => $request->color,
        'doors' => $request->doors,
        'body_style' => $request->body_style,
        'mileage' => $request->mileage,
        'year' => $request->year,
        'condition' => $request->condition,
        'transmission' => $request->transmission,
        'seller_type' => $request->seller_type,
        'air_conditioned' => $request->air_conditioned,
        'registered' => $request->registered,
        'description' => $request->description,
        'image_1' => $imagefile1,
        'image_2' => $imagefile2 ?? 'NULL',
        'image_3' => $imagefile3 ?? 'NULL',
        'image_4' => $imagefile4 ?? 'NULL',
        'image_5' => $imagefile5 ?? 'NULL',
        'image_6' => $imagefile6 ?? 'NULL',
        'image_7' => $imagefile7 ?? 'NULL',
        'image_8' => $imagefile8 ?? 'NULL',
        'image_9' => $imagefile9 ?? 'NULL',
        'image_10' => $imagefile10 ?? 'NULL',
        'city' => $request->city,
        'suburb' => $request->suburb,
        'name' => $request->name,
        'shipping' =>$request->shipping,
        'payment_method' => $request->payment_method,
        'category_page_free' =>$request->category_page_free,
        'category_page_free_days' =>$request->category_page_free_days,
        'category_featured_image' =>$request->category_featured_image,
        'category_featured_image_days' =>$request->category_featured_image_days,
        'home_page_featured' =>$request->home_page_featured,
        'home_page_featured_days' =>$request->home_page_featured_days,
        'homepage_slider_gallery' =>$request->homepage_slider_gallery,
        'homepage_slider_gallery_days' =>$request->homepage_slider_gallery_days,
        'tag_status' => $request->tag_status,
    ]);
    if($createListing){
        session()->flash('message', 'Listing Created Successfully!');
            return redirect()->back();
        }

    }   

}
