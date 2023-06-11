<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Banner;
use App\Models\City;
use App\Models\Slider;
use App\Models\SliderSetting;
use App\Models\Listing;

class BannerController extends Controller
{
    public function createBanner(Request $request)
    {

        if($request->hasFile('bannerImage')){
            $extension = $request->bannerImage->extension();
            $imagefile = time().rand(0000000,99999999)."_.".$extension;
            $request->bannerImage->move(public_path('img\Banners'), $imagefile);      
        }

        
        $banner = Banner::create([
        'banner_name' => $request->bannerName,
        'banner_image' => $imagefile,
        'adsence_code' => $request->adsenceCode,
        'categories' => $request->categories,
        'banner_slot' => $request->bannerSlot,
        'paid_from' => $request->paidFrom,
        'valid_until' => $request->validUntil,
        ]);

        if ($banner) {
            session()->flash('message', 'Banner Created Successfully!');
            return redirect()->back();
        }

    }

    public function banners()
    {
        $banners = banner::orderBy('id', 'DESC')->get();
        $city = City::orderBy('id', 'DESC')->get();
        $sliders = Slider::with('city')->orderBy('id', 'DESC')->get();
        $slidersettings = SliderSetting::first();
        $listings = Listing::whereNotNull('homepage_slider_gallery')
                            ->where('homepage_slider_gallery','!=','')
                            ->get();
        return view('admin.banner-setup', compact('banners','city','sliders','slidersettings','listings'));
    }

    public function destroyBanner($id)
    {
        $destroyBanner = Banner::find($id)->delete();
            return redirect()->back();
    }


}