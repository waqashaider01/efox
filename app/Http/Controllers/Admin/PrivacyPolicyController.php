<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PrivacyPolicy;

class PrivacyPolicyController extends Controller
{

    public function viewPrivacy()

    {
        $privacy = PrivacyPolicy::first();
        return view('admin.privacy-policy', compact('privacy'));
    }


    public function updateprivacyPolicy(Request $request)

    {
        $updateprivacy = PrivacyPolicy::find($request->id);
        $updateprivacy->privacypolicy_content = $request->privacyPolicyContent;
        $updateprivacy->meta_title = $request->metaTitle;
        $updateprivacy->meta_description = $request->metaDescription;
        $updateprivacy->meta_keywords = $request->metaKeywords;
        $updateprivacy->update();

        if($updateprivacy){
            session()->flash('message', 'Privacy Policy Updated Successfully!');
            return redirect()->back();
        }
    }
}
