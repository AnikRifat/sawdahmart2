<?php

namespace App\Http\Controllers;

use App\Models\Users;
// use App\Models\Product;
use Illuminate\Http\request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index()
    {
        if (Auth::user()->role == 1) {
            Redirect('admin');
        } elseif (Auth::user()->role == 0) {
            redirect('user.index');
        } else {
            return redirect('login')->with('error', 'invalid Email or Password');
        }
    }
}
