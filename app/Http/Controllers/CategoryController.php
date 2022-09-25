<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();
        // dd($category);
        return view('admin.pages.category.index', compact('categories'));
    }
    public function addCategory()
    {
        return view('admin.pages.category.add_category');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request

     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required',
        ]);

        $input = $request->all();
        // dd($input);
        Category::create($input);

        return redirect()->route('viewcategory')->with('success', 'Category added successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        return view('admin.pages.category.edit_category', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        $request->validate([
            'name' => 'required',
        ]);

        $input = $request->all();
        // dd($input);
        $category->update($input);

        return redirect()->route('viewcategory')->with('success', 'Category Updated successfully.');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        $subcatcount =  $category->subcategory()->count();
        $productcount = $category->product()->count();



        if ($productcount > 0 && $subcatcount > 0) {
            if ($category->product()->delete() && $category->subcategory()->delete() && $category->delete()) {
                return redirect()->route('viewcategory')->with('success', 'category Deleted Scueesfully.');
            } else {
                return redirect()->route('viewcategory')->with('success', 'not ahppend.');
            }
        } elseif ($productcount = 0 && $subcatcount > 0) {
            if ($category->subcategory()->delete() && $category->delete()) {
                return redirect()->route('viewcategory')->with('success', 'category Deleted Scueesfully.');
            } else {
                return redirect()->route('viewcategory')->with('success', 'not ahppend.');
            }
        } elseif ($productcount > 0 && $subcatcount = 0) {
            if ($category->product()->delete() && $category->delete()) {
                return redirect()->route('viewcategory')->with('success', 'category Deleted Scueesfully.');
            } else {
                return redirect()->route('viewcategory')->with('success', 'not ahppend.');
            }
        } else {
            if ($category->delete()) {
                return redirect()->route('viewcategory')->with('success', 'category Deleted Scueesfully.');
            } else {
                return redirect()->route('viewcategory')->with('success', 'not ahppend.');
            }
        }
    }
}
