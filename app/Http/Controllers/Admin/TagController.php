<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tag;

class TagController extends Controller
{

    public function updateRibbon(Request $request)

    {
        $updateRibbon = Tag::find($request->id);
        $updateRibbon->price = $request->price;
        $updateRibbon->update();

        if($updateRibbon){
            session()->flash('message','Ribbon Price Updated Successfully!.');
            return redirect()->back();
        }
    }
}
