<?php

namespace App\Http\Controllers;

use App\Models\Checkout;
use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function admin()
    {

        return view('admin.index');
    }

    public function user()
    {

        $user = Auth::user();
        $orders = Order::where('user_id', $user->id)->get();
        // dd($orders);
        // dd($user);
        return view('front.pages.dashboard.index', compact('user', 'orders'));
    }
    public function edituser()
    {
        $user = Auth::user();
        // dd($user);
        return view('front.pages.dashboard.edit', compact('user'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function vieworder(Order $order)
    {
        // dd($order);
        $user = Auth::user();
        $checkout = Checkout::where('track_id', $order->track_id)->get();
        // dd($checkout);
        // dd($user);
        return view('front.pages.dashboard.view', compact('user', 'order', 'checkout'));
    }
    public function redirectTo()
    {
        if (Auth::user()->role == 1) {
            return redirect('admin');
        } elseif (Auth::user()->role == 0) {
            return redirect('user');
        } else {
            return redirect('login')->with('error', 'invalid Email or Password');
        }
    }
}
