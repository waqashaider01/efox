<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Term;

class TermController extends Controller
{
   public function viewTerm()

    {
        $terms = Term::first();
        return view('admin.terms-conditions', compact('terms'));
    }


    public function updatetermsCondition(Request $request)

    {
        $updateterms = Term::find($request->id);
        $updateterms->terms_condition_content = $request->termsConditionsContent;
        $updateterms->meta_title = $request->metaTitle;
        $updateterms->meta_description = $request->metaDescription;
        $updateterms->meta_keywords = $request->metaKeywords;
        $updateterms->update();

        if($updateterms){
            session()->flash('message', 'Terms & Conditions Updated Successfully!');
            return redirect()->back();
        }
    }
}
