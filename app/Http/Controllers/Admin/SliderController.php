<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Slider;

class SliderController extends Controller
{
    public function createSlider(Request $request)
    {
        if($request->hasFile('slider_image')){
            $extension = $request->slider_image->extension();
            $imagefile = time()."_.".$extension;
            $request->slider_image->move(public_path('img\Sliders'), $imagefile);      
        }

        $slider = Slider::create([
            'price' => $request->price,
            'slider_image' => $imagefile,
            'city_id' => $request->location,
            'slider_speed' => $request->slider_speed,
            'slider_pause' => $request->slider_pause,
            'visible_status' => $request->visible_status,
            'autoplay_status' => $request->autoplay_status,
            'mousehover_status' => $request->mousehover_status,
            'start_from' => $request->start_from,
            'valid_until' => $request->valid_until,
        ]);

        if($slider)
        {
            session()->flash('message', 'Slider Created Successfully!');
            return redirect()->back();
        }

    }

    public function destroySlider($id)
        {
            $destroySlider = Slider::find($id)
                                        ->delete();
            return redirect()->back();
        }
}
