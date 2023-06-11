<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SliderSetting;

class SliderSettingController extends Controller
{
    public function updateSlidersetting(Request $request)

    {

        $updatesetting = SliderSetting::find($request->id);
        $updatesetting->slider_speed = $request->get('slider_speed');
        $updatesetting->slider_pause = $request->get('slider_pause'); 
        $updatesetting->visible_status = $request->get('visible_status') ?? 'off';
        $updatesetting->autoplay_status = $request->get('autoplay_status') ?? 'off'; 
        $updatesetting->mousehover_status = $request->get('mousehover_status') ?? 'off';
        $updatesetting->update();
        
        if($updatesetting){
            session()->flash('message', 'Settings Updated Successfully');
            return redirect()->back();
        }
    }
}
