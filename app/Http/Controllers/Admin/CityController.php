<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\City;
use App\Models\Suburb;


class CityController extends Controller
{
    public function createCity(Request $request)
    {
        $createCity = City::create([
        'city_name' => $request->cityName,
        'seo_title' => $request->seoTitle,
        'seo_description' => $request->seoDescription,
        'seo_keywords' => $request->seoKeywords,
        ]);

        return back();
    }

    public function viewCity()
    {
        $viewcities = City::with('suburb')->orderBy('id', 'DESC')->get();
        return view('admin.city-suburbs', compact('viewcities'));
    }

    public function destoryCity($id)
    {
        $destoryCity = City::find($id)
                                ->delete();
         return redirect()->back();
    }

}
