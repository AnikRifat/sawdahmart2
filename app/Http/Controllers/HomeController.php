<?php

namespace App\Http\Controllers;

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

        return view('front.pages.dashboard.index');
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
