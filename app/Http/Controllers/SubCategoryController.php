<?php

namespace App\Http\Controllers;

use App\Models\SubCategory;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class SubCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subcategories = SubCategory::all();
        return view('admin.pages.subcategory.index', compact('subcategories'));
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
            'category_id' => 'required',
        ]);

        $input = $request->all();
        // dd($input);
        SubCategory::create($input);

        return redirect()->route('viewsubcategory')->with('success', 'Sub Category added successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // dd($id);
        // return $subcategory;
        $data = SubCategory::where('category_id', $id)->get();
        // $data = SubCategory::where('category_id', $subcategory)->get();
        return $data;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @param  APP\Models\SubCategory  $subcategory
     * @return \Illuminate\Http\Response
     */
    public function edit(SubCategory  $subcategory)
    {
        return view('admin.pages.subcategory.edit_subcategory', compact('subcategory'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  APP\Models\SubCategory  $subcategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SubCategory  $subcategory)
    {
        $request->validate([
            'name' => 'required',
            'category_id' => 'required',
        ]);

        $input = $request->all();
        // dd($input);
        $subcategory->update($input);

        return redirect()->route('viewsubcategory')->with('success', 'Sub Category Updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SubCategory  $subcategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(SubCategory $subcategory)
    {
        if ($subcategory->product()->count() > 0){
            if ($subcategory->product()->delete() && $subcategory->delete()) {
                return redirect()->route('viewsubcategory')->with('success', 'Subcategory Deleted Scueesfully.');
            } else {
                return redirect()->route('viewsubcategory')->with('success', 'not ahppend.');
            }
        }else{
            if ($subcategory->delete()) {
                return redirect()->route('viewsubcategory')->with('success', 'Subcategory Deleted Scueesfully.');
            } else {
                return redirect()->route('viewsubcategory')->with('success', 'not ahppend.');
            }
        }

    }
}
