<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SubCategory;

class SubCategoryController extends Controller
{
     public function createSubCategory(Request $request,$cat_id)
    {
        $subcategory = SubCategory::create([
        'category_id' => $cat_id,
        'subcategory_name' => $request->subCategoryName,
        'seo_title' => $request->seoTitle,
        'seo_description' => $request->seoDescription,
        'seo_keywords' => $request->seoKeywords,
        ]);
        if($subcategory){
            session()->flash('message', 'Category Added Successfully!');
            return redirect()->back();
        }

    }

     public function destorySubCategory($id)
        {
            $destorySubCategory = SubCategory::find($id)
                                        ->delete();
            return redirect()->back();
        }
}
