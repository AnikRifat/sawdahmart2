<?php

namespace App\Http\Controllers;

use App\Models\Website;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.pages.content.index');
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Website  $website
     * @return \Illuminate\Http\Response
     */
    public function show(Website $website)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Website  $website
     * @return \Illuminate\Http\Response
     */
    public function edit(Website $website)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Website  $website
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Website $content)
    {

        $request->validate([
            'name' => 'required',
            'slider_text' => 'required',
            'email' => 'required',
            'address' => 'required',
            'phone' => 'required',
        ]);

        $input = $request->all();
        // dd($input);
        if ($image = $request->file('logo')) {
            $filePath = 'assets/images/logo/';
            $setImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($filePath, $setImage);
            $input['logo'] = $setImage;
        } else {
            unset($input['logo']);
        }
        if ($image = $request->file('slider')) {
            $filePath = 'assets/images/';
            $setImage = date('YmdHis') . "_1" . "." . $image->getClientOriginalExtension();
            $image->move($filePath, $setImage);
            $input['slider'] = $setImage;
        } else {
            unset($input['slider']);
        }
        if ($image = $request->file('tvc1')) {
            $filePath = 'assets/images/';
            $setImage = date('YmdHis') . "_2" . "." . $image->getClientOriginalExtension();
            $image->move($filePath, $setImage);
            $input['tvc1'] = $setImage;
        } else {
            unset($input['tvc1']);
        }
        if ($image = $request->file('tvc2')) {
            $filePath = 'assets/images/';
            $setImage = date('YmdHis') . "_3" . "." . $image->getClientOriginalExtension();
            $image->move($filePath, $setImage);
            $input['tvc2'] = $setImage;
        } else {
            unset($input['tvc2']);
        }
        $content->update($input);


        return redirect()->route('content')->with('success', 'Settings updated Successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Website  $website
     * @return \Illuminate\Http\Response
     */
    public function destroy(Website $website)
    {
        //
    }
}
