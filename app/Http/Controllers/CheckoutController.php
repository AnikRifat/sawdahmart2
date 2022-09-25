<?php

namespace App\Http\Controllers;

use App\Models\Checkout;
use App\Models\Order;
use App\Models\Product;
use App\Models\Website;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        // if()
        $product_id = $request->item_id;
        $product_name = $request->item_name;
        $product_price = $request->item_price;
        // dd($product_name);
        $product_quantity = $request->item_quantity;
        $subtotal = $request->subtotal;
        $content = Website::find('1');
        $track_id = $content->name . '_' . uniqid();
        $date = date("Y-m-d");
        $time = date("h:i:sa");
        $user_id = Auth::user()->id;
        $invoice = random_int(100000, 999999);
        for ($i = 0; $i < count($product_id); $i++) {
            $input = [
                'track_id' => $track_id,
                'user_id' =>  $user_id,
                'product_id' => $product_id[$i],
                'product_name' => $product_name[$i],
                'product_price' => $product_price[$i],
                'product_quantity' => $product_quantity[$i],
                'date' => $date,
                'time' => $time
            ];
            // dd($input);
            // dd($input);
            Checkout::create($input);
        }
        $data = [
            'invoice' => $invoice,
            'track_id' => $track_id,
            'user_id' =>  $user_id,
            'subtotal' => $subtotal,
            'status' => 0,
            'date' => $date,
            'time' => $time
        ];
        Order::create($data);
        return view('front.pages.checkout_success');
        // }
        // foreach ($product_id as $item) {

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Checkout  $checkout
     * @return \Illuminate\Http\Response
     */
    public function show(Checkout $checkout)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Checkout  $checkout
     * @return \Illuminate\Http\Response
     */
    public function edit(Checkout $checkout)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Checkout  $checkout
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Checkout $checkout)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Checkout  $checkout
     * @return \Illuminate\Http\Response
     */
    public function destroy(Checkout $checkout)
    {
        //
    }
}
