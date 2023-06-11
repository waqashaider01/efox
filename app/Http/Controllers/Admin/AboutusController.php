<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Aboutus;

class AboutusController extends Controller
{
    public function viewAbout()

    {
        $about = Aboutus::first();
        return view('admin.about-us', compact('about'));
    }

    public function updateAbout(Request $request)

    {
        $updateabout = Aboutus::find($request->id);
        $updateabout->aboutus_content = $request->aboutUsContent;
        $updateabout->meta_title = $request->metaTitle;
        $updateabout->meta_description = $request->metaDescription;
        $updateabout->meta_keywords = $request->metaKeywords;
        $updateabout->update();

        if($updateabout){
            session()->flash('message', 'About Updated Successfully!');
            return redirect()->back();
        }
    }

}
