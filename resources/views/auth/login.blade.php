@extends('front.layouts.app')



@section('content')
<div class="breadcrumb-area pt-205 pb-100" style="background-image: url({{ asset('/') }}assets/images/{{ $content->tvc2 }})">
    <div class="container">
        <div class="breadcrumb-content">
            <h2>login</h2>
            <ul>
                <li><a href="#">home</a></li>
                <li> login </li>
            </ul>
        </div>
    </div>
</div>
<!-- login-area start -->
<div class="register-area ">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-12 col-lg-6 col-xl-6 ms-auto me-auto">
                <div class="login">
                    <div class="login-form-container">
                        <div class="login-form">
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <input type="email" name="email" placeholder="email" value="{{ old('email') }}">
                                <input type="password" name="password" placeholder="Password">
                                <div class="button-box">
                                    <div class="login-toggle-btn">
                                        {{-- <input type="checkbox"> --}}
                                        <label> <a class="font-weight-bold" href="{{ route('register') }}">register
                                                here...</a></label>
                                        <a href="{{ route('password.request') }}">Forgot Password?</a>
                                    </div>
                                    <button type="submit" class="default-btn floatright">Login</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- login-area end -->
@endsection
