<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        $info = [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8'],
            'phone' => ['required', 'max:15', 'unique:users'],
            'address' => ['required'],
            'country' => ['required'],
            'city' => ['required'],
        ];
        $ddx = Validator::make($data, $info);
        if (!$ddx) {
            dd('notok');
        } else {
            return $ddx;
        }
        // dd($ddx);
        // if ($ddx) {
        //     // dd($info);
        //     return dd('no validate');
        // } else {
        //     dd($info);
        // }

        // if (!$data['email']) {
        //     return redirect()->route('register')->with('error', 'account already exist');
        // }
        return Validator::make($data, $info);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        dd($data);
        $user = [
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'phone' => $data['phone'],
            'address' => $data['address'],
            'country' => $data['country'],
            'city' => $data['city'],
        ];
        if (User::create($user)) {
            return redirect()->route('user')->with('success', 'djusahfd');
        } else {
            return redirect()->route('register')->with('error', 'Please fillup every field');
        };
    }
}
