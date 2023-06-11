<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Listing;
use App\Models\Aboutus;
use App\Models\PrivacyPolicy;
use App\Models\Term;
use App\Models\SiteFee;



class AdminController extends Controller
{
    public function latestAds()

    {
        $latestAds = Listing::all();
        return view('admin.latest-ads', compact('latestAds'));
    }

    public function adsDetails()

    {
        $adsDetails = Listing::all();
        return view('admin.ads-details', compact('adsDetails'));
    }

    public function latestAuctions()

    {
        $latestAuctions = Listing::where('listing_type', '=', '1')->orderBy('id', 'DESC')->get();
        return view('admin.latest-auctions', compact('latestAuctions'));
    }

    public function viewAbout()

    {
        $aboutus = Aboutus::all();
        return view('admin.view_about', compact('aboutus'));
    }

    public function destoryAbout($id)

    {

        $destoryAbout = Aboutus::find($id)
                                    ->delete();
        if($destoryAbout){
            session()->flash(' message', 'About deleted Successfully!');
            return redirect()->back();
        }
    }

    public function viewPrivacy()

    {
        $privacies = PrivacyPolicy::all();
        return view('admin.view-privacy', compact('privacies'));
    }

    public function destoryPrivacy($id)

    {
        $destoryPrivacy = PrivacyPolicy::find($id)
                                            ->delete();
       if($destoryPrivacy){
            session()->flash(' message', 'Terms deleted Successfully!');
            return redirect()->back();
        } 
    }

    public function viewTerm()

    {
        $terms = Term::all();
        return view('admin.view-terms', compact('terms'));
    }

    public function destoryTerm($id)

    {
        $destoryTerm = Term::find($id)
                                ->delete();
        return redirect()->back();
    }

    public function viewSitefees()

    {
        $Sitefees = SiteFee::all();
        return view('admin.view-sitefees', compact('Sitefees'));
    }

    public function destorySitefees($id)

    {
        $destorySitefees = SiteFee::find($id)
                                        ->delete();
        return redirect()->back();
    }
}
