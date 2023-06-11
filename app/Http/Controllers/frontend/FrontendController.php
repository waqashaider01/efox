<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Aboutus;
use App\Models\PrivacyPolicy;
use App\Models\Term;
use App\Models\SiteFee;
use App\Models\SliderSetting;
use App\Models\Listing;
use App\Models\Banner;
use App\Models\Category;
use App\Models\City;

class FrontendController extends Controller
{

    public function home()

    {
        $slidersettings = SliderSetting::first();
        $listings = Listing::whereNotNull('homepage_slider_gallery')
                            ->where('homepage_slider_gallery','!=','')
                            ->get();
        $all_listings = Listing::all();
        $banners = Banner::all();
        $categories = Category::all();
        $cities = City::all();
        return view('frontend.index', compact('slidersettings','listings','all_listings','banners','categories','cities'));
    }

    public function listingDetail($id)

    {

        $slidersettings = SliderSetting::first();
        $listings = Listing::whereNotNull('homepage_slider_gallery')
                            ->where('homepage_slider_gallery','!=','')
                            ->get();
        $all_listings = Listing::find($id);
        return view('frontend.listing-detail', compact('slidersettings','listings','all_listings'));
    }

    public function about()

    {
        $aboutus = Aboutus::all();
        return view('frontend.about-us', compact('aboutus'));
    }

    public function privacyPolicy()

    {
        $privacies = PrivacyPolicy::all();
        return view('frontend.privacy', compact('privacies'));
    }

    public function terms()

    {
        $terms = Term::all();
        return view('frontend.terms', compact('terms'));
    }

    public function sitefees()

    {
        $Sitefees = SiteFee::all();
        return view('frontend.site-fees', compact('Sitefees'));
    }
}
