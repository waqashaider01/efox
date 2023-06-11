<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Listing;

class UserAdsController extends Controller
{
    public function viewAds()

    {
    $userads = Listing::all();
    return view('admin.user-ads', compact('userads'));
    }

    public function destroyAds($id)

    {
        $destory = Listing::find($id)
                            ->delete();
        if($destory){
            session()->flash('message', 'Ads Deleted Successfully!');
            return redirect()->back();
        }
    }

}

