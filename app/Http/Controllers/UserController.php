<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Users;
// use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PhpParser\Node\Stmt\Return_;

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
    public function customer()
    {
        $customers = User::where('role', 0)->get();
        return view('admin.pages.users.user', compact('customers'));
    }
    public function admin()
    {
        $user = Auth::user();
        return view('admin.pages.users.admin', compact('user'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function admininfoupdate(Request $request)
    {
        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
            'city' => $request->city,
            'country' => $request->country,
        ];

        // $request->all();
        // dd($data);
        User::whereId(Auth::user()->id)->update($data);
        return back()->with('success', 'User Information Updated Successfully');
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function infoupdate(Request $request)
    {
        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
            'city' => $request->city,
            'country' => $request->country,
        ];

        // $request->all();
        // dd($data);
        User::whereId(Auth::user()->id)->update($data);
        return redirect()->route('user')->with('success', 'User Information Updated Successfully');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        // dd($user);
        $user->delete();
        return back()->with('success', 'user deleted successfully');
    }
}
