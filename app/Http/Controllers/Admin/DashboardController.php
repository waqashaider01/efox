<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Listing;
use App\Models\User;
use Carbon\Carbon;

class DashboardController extends Controller
{
    public function viewDashboard()

    {

        $daybuynow = Listing::where('listing_type',0)->where('created_at', '>=', Carbon::now()->subDay())->count();

        $dayauctions = Listing::where('listing_type',1)->where('created_at', '>=', Carbon::now()->subDay())->count();

        $daynewusers = User::where('created_at', '>=', Carbon::now()->subDay())->where('role_as', '!=', '1')->orderBy('id', 'DESC')->count();

        $weekbuynow = Listing::where('listing_type',0)->where('created_at', '>=', Carbon::now()->subDays(7))->count();

        $weekauctions = Listing::where('listing_type',1)->where('created_at', '>=', Carbon::now()->subDays(7))->count();

        $weeknewusers = User::where('created_at', '>=', Carbon::now()->subDays(7))
                                                ->where('role_as', '!=', '1')->orderBy('id', 'DESC')->count();

        return view('admin.index', compact('daybuynow','dayauctions','daynewusers','weekbuynow','weekauctions','weeknewusers'));

    }
}
