@extends('front.layouts.app')

@section('content')
<div class="breadcrumb-area pt-205 pb-100" >
    <div class="container">
        <div class="breadcrumb-content">
            <h2>register</h2>
            <ul>
                <li><a href="#">home</a></li>
                <li> register </li>
            </ul>
        </div>
    </div>
</div>
<!-- register-area start -->
<div class="register-area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 col-12 col-lg-6 col-xl-6 ms-auto me-auto">
                <div class="login">
                    <div class="login-form-container">
                        <div class="login-form">
                            @if ($errors->any())

                            @foreach ($errors->all() as $error)
                            <div class="alert alert-danger">
                                <strong>Error!</strong> {{ $error }}
                            </div>
                            @endforeach

                            @endif
                            {{-- @if ($massage = Session::get('error'))
                            <div class="alert alert-danger">
                                <strong>Error!</strong> {{ $massage }}
                        </div>
                        @endif --}}
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <input type="text" name="name" placeholder="Username">
                            <input name="email" placeholder="Email" type="email">
                            <input name="phone" placeholder="phone" type="text">
                            <input name="country" placeholder="country" type="text">
                            <input name="city" placeholder="city" type="text">
                            <input name="address" placeholder="address" type="text">
                            <input type="password" name="password" placeholder="Password">
                            <input type="password" name="password_confirmation" placeholder="Confirm Password">
                            <div class="button-box">
                                <button type="submit" class="default-btn floatright">Register</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
