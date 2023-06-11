<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\SubCategory;


class CategoryController extends Controller
{
    public function createCategory(Request $request)
    {
        
        if($request->hasFile('image_file')){
            $extension = $request->image_file->extension();
            $imagefile = time().rand(0000000,99999999)."_.".$extension;
            $request->image_file->move(public_path('img\categories'), $imagefile);      
        }

        $category = Category::create([
        'category_name' => $request->categoryName,
        'seo_title' => $request->seoTitle,
        'image_file' => $imagefile,
        'seo_description' => $request->seoDescription,
        'seo_keywords' => $request->seoKeywords,
        ]);
        if($category){
            session()->flash('message', 'Category Added Successfully!');
            return redirect()->back();
        }
    }

    public function viewCategory() 
    {
        $categories = Category::with('subcategory')->orderBy('id', 'DESC')->get();
        return view('admin.category', compact('categories'));
    } 

    public function destoryCategory($id)
    {
        $destoryCategory = Category::find($id)
                                        ->delete();
        return redirect()->back();
    }

      
}



