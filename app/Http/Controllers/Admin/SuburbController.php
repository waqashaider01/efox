<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Suburb;

class SuburbController extends Controller
{
    public function createSubrub(Request $request, $city_id)
    {
        $createCity = Suburb::create([
        'city_id' => $city_id,
        'suburb_name' => $request->suburbName,
        'seo_title' => $request->seoTitle,
        'seo_description' => $request->seoDescription,
        'seo_keywords' => $request->seoKeywords,
        ]);

        return back();
    }

    public function destorySuburb($id)
    {
        $destorySuburb = Suburb::find($id)
                                    ->delete();
        return redirect()->back();
    }


}
