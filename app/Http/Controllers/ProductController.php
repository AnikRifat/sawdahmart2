<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\ProductColor;
use App\Models\ProductSize;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        return view('admin.pages.products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('admin.pages.products.add_products');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $size = $request->input('size');
        $color = $request->input('color');
        $productid = $request->input('product_id');
        // dd(count($color));
        // $color = $request->input('product_id');
        // dd($request);
        // return view('admin.pages.products.index');
        $request->validate([
            'product_id' => 'required',
            'name' => 'required',
            'details' => 'required',
            'description' => 'required',
            'image' => 'required|image|mimes:jpg,jpeg,png,webp|max:2024',
            'price' => 'required',
            'unit' => 'required',
            'category_id' => 'required',
        ]);

        $input = $request->all();
        if (Product::find($productid)) {
            return back()->with('error', 'product id should be unique');
        } else {


            if ($image = $request->file('image')) {
                $filePath = 'assets/images/product/';
                $setImage = date('YmdHis') . "_1" . "." . $image->getClientOriginalExtension();
                $image->move($filePath, $setImage);
                $input['image'] = $setImage;
            }
            if ($image = $request->file('image_2')) {
                $filePath = 'assets/images/product/';
                $setImage = date('YmdHis') . "_2" . "." . $image->getClientOriginalExtension();
                $image->move($filePath, $setImage);
                $input['image_2'] = $setImage;
            } else {
                $input['image_2'] = ' ';
            }
            if ($image = $request->file('image_3')) {
                $filePath = 'assets/images/product/';
                $setImage = date('YmdHis') . "_3" . "." . $image->getClientOriginalExtension();
                $image->move($filePath, $setImage);
                $input['image_3'] = $setImage;
            } else {
                $input['image_3'] = ' ';
            }
            if ($image = $request->file('image_4')) {
                $filePath = 'assets/images/product/';
                $setImage = date('YmdHis') . "_4" . "." . $image->getClientOriginalExtension();
                $image->move($filePath, $setImage);
                $input['image_4'] = $setImage;
            } else {
                $input['image_4'] = ' ';
            }
            if ($image = $request->file('image_5')) {
                $filePath = 'assets/images/product/';
                $setImage = date('YmdHis') . "_5" . "." . $image->getClientOriginalExtension();
                $image->move($filePath, $setImage);
                $input['image_5'] = $setImage;
            } else {
                $input['image_5'] = ' ';
            }
            // dd($input);
            Product::create($input);

            if ($size) {
                for ($i = 0; $i < count($size); $i++) {
                    $data = [
                        'product_id' => $productid,
                        'size_id' => $size[$i]
                    ];

                    ProductSize::create($data);
                }
            }
            if ($color) {
                for ($i = 0; $i < count($color); $i++) {
                    $data = [
                        'product_id' => $productid,
                        'color_id' => $color[$i]
                    ];

                    ProductColor::create($data);
                }
            }

            return redirect()->route('product.index')->with('success', 'Product added successfully.');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        // $product = Product::all();
        // dd($product);

    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function details(Product $product)
    {
        $sizes = ProductSize::where('product_id', $product->product_id)->get();
        $colors = ProductColor::where('product_id', $product->product_id)->get();


        // $colors = ProductColor::join('colors', 'productcolors.color_id', '=', 'colors.id')
        //     ->select('colors.id', 'colors.name')
        //     ->get();
        return view('front.pages.product_details', compact('product', 'colors', 'sizes'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        return view('admin.pages.products.edit_products', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        // dd($request->request->all());

        $request->validate([
            'name' => 'required',
            'details' => 'required',
            'description' => 'required',
            'price' => 'required',
            'unit' => 'required',
            'category_id' => 'required',
        ]);

        $input = $request->all();

        if ($image = $request->file('image')) {
            $filePath = 'assets/images/product/';
            $setImage = date('YmdHis') . "_1" . "." . $image->getClientOriginalExtension();
            $image->move($filePath, $setImage);
            $input['image'] = $setImage;
        } else {
            unset($input['image']);
        }
        if ($image = $request->file('image_2')) {
            $filePath = 'assets/images/product/';
            $setImage = date('YmdHis') . "_2" . "." . $image->getClientOriginalExtension();
            $image->move($filePath, $setImage);
            $input['image_2'] = $setImage;
        } else {
            unset($input['image_2']);
        }
        if ($image = $request->file('image_3')) {
            $filePath = 'assets/images/product/';
            $setImage = date('YmdHis') . "_3" . "." . $image->getClientOriginalExtension();
            $image->move($filePath, $setImage);
            $input['image_3'] = $setImage;
        } else {
            unset($input['image_3']);
        }
        // dd($input);
        $product->update($input);

        return redirect()->route('product.index')->with('success', 'product updated Scueesfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();
        // dd($category->delete());
        return redirect()->route('product.index')->with('success', 'Product Deleted Scueesfully.');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request)
    {
        // dd($request->input());
        // return $request->input();
        $data = Product::where('name', 'like', '%' . $request->input('query') . '%')->get();
        // dd($data);

        return view('front.pages.search', compact('data'));
    }
}
