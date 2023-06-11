<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SiteFee;

class SiteFeeController extends Controller
{
    public function viewSitefee()

    {
        $sitefees = SiteFee::first();
        return view('admin.site-fees', compact('sitefees'));
    }


    public function updatesiteFees(Request $request)

    {
        $updatesitefees = SiteFee::find($request->id);
        $updatesitefees->sitefees_content = $request->siteFeesContent;
        $updatesitefees->meta_title = $request->metaTitle;
        $updatesitefees->meta_description = $request->metaDescription;
        $updatesitefees->meta_keywords = $request->metaKeywords;
        $updatesitefees->update();

        if($updatesitefees){
            session()->flash('message', 'Site Fees Updated Successfully!');
            return redirect()->back();
        }
    }
}
