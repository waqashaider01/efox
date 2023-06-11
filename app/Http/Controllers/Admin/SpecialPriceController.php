<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SpecialPrice;
use App\Models\Tag;


class SpecialPriceController extends Controller
{
    public function viewPrice()

    {
        $specialprices = SpecialPrice::all();
        $ribbons = Tag::all();
        return view('admin.user-special-price', compact('specialprices','ribbons'));
    }
    public function createPrice(Request $request)

    {
        $createprice = SpecialPrice::create([
            'period' => $request->period,
            'category' => $request->category,
            'price' => $request->price,
        ]);
        if($createprice){
            session()->flash('message', 'Special price Created Successfully!');
            return redirect()->back();
        }
    }

    public function destroyPrice($id)

    {
        $destory = SpecialPrice::find($id)
                                ->delete();
        return redirect()->back();
    }
}

