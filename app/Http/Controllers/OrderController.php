<?php

namespace App\Http\Controllers;

use App\Models\Checkout;
use App\Models\Order;
use GrahamCampbell\ResultType\Success;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders = Order::all();
        // $checkouts = Checkout::all();
        // dd($checkouts);
        // foreach ($checkouts as $item) {
        //     return $item->product->name;
        // }
        // foreach ($orders as $item) {
        //     $products = $item->product;

        //     dd($products);
        //     $username = $item->user->name;
        // }
        return view('admin.pages.order.index', compact('orders'));
    }
    public function acceptview()
    {
        $orders = Order::where('status', 1)->get();
        return view('admin.pages.order.accepted.index', compact('orders'));
    }
    public function cancelview()
    {
        $orders = Order::where('status', 2)->get();
        return view('admin.pages.order.canceled.index', compact('orders'));
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        return view('admin.pages.order.edit', compact('order'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */

    // public function update(Request $request, Order $order)
    // {
    //     dd($order);
    //     $data = [
    //         'status' => 1
    //     ];
    //     $order->update($data);

    //     return redirect()->route('order.index')->with('success', 'order accepted Scueesfully.');
    // }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function accept(Order $order)
    {
        // return "Success";
        // dd($order);
        $data = [
            'status' => 1
        ];
        $order->update($data);

        return redirect()->route('order.index')->with('success', 'order accepted Scueesfully.');
        //  dd($request->all());
    }
    public function cancel(Order $order)
    {
        $data = [
            'status' => 2
        ];
        $order->update($data);

        return redirect()->route('order.index')->with('success', 'order accepted Scueesfully.');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //
    }
}
