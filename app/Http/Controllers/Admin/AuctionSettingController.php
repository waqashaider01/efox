<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AuctionSetting;
use App\Models\BidIncrement;

class AuctionSettingController extends Controller
{

    public function viewSetting()

    {
        $auctionsetting = AuctionSetting::first();
        $bidsetting = BidIncrement::first();
        return view('admin.auction-settings', compact('auctionsetting', 'bidsetting'));
    }

    public function updateAuctionSetting(Request $request)

    {
        $updatesetting = AuctionSetting::find($request->id);
        $updatesetting->enable_status = $request->enable_status ?? 'off';
        $updatesetting->duration_options = $request->duration_options;
        $updatesetting->duration_days = $request->duration_days;
        $updatesetting->change_duration_status = $request->change_duration_status ?? 'off';
        $updatesetting->edit_schedule_status = $request->edit_schedule_status ?? 'off';
        $updatesetting->max_auto_relists = $request->max_auto_relists;
        $updatesetting->snper_protection_seconds = $request->snper_protection_seconds;
        $updatesetting->reserve_status = $request->reserve_status ?? 'off';
        $updatesetting->quick_bid_status = $request->quick_bid_status ?? 'off';
        $updatesetting->auto_bid_status = $request->auto_bid_status ?? 'off';
        $updatesetting->update();

        if($updatesetting){
          session()->flash('message', 'Settings Updated Successfully');
          return redirect()->back();
        }
    }

    public function updatebidSetting(Request $request)

    {
        $updatebidsetting = BidIncrement::find($request->id);
        $updatebidsetting->prices = $request->prices;
        $updatebidsetting->Increments = $request->Increments;
        $updatebidsetting->delete_status = $request->delete_status ?? 'no';
        $updatebidsetting->update();

        if($updatebidsetting){
          session()->flash('message', 'Settings Updated Successfully');
          return redirect()->back();
        }
    }
}
