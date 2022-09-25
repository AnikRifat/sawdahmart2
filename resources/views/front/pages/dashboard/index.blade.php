@extends('front.layouts.app')
@section('content')
<div class="main-body">
    <!-- content starts here -->

    {{-- <div class="breadcrumb-area pt-205 pb-210" style="background-image: url(assets/img/bg/breadcrumb.jpg)">
        <div class="container">
            <div class="breadcrumb-content">
                <h2>register</h2>
                <ul>
                    <li><a href="#">home</a></li>
                    <li> register </li>
                </ul>
            </div>
        </div>
    </div> --}}
    <!-- PAGE BANNER SECTION -->

    <!-- END PAGE BANNER SECTION -->
    <div class="container rounded bg-white mt-5 mb-5">
        <div class="row">
            <div class="col-md-3 border-right">
                <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5"
                      width="150px"
                      src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg"><span
                      class="font-weight-bold">hi, {{ Auth::user()->name }}</span><span
                      class="text-black-50">{{ Auth::user()->email }}</span><span> </span></div>
            </div>
            <div class="col-md-9 col-12">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs">
                    <li class="nav-item">
                        <a class="nav-link active" data-bs-toggle="tab" href="#home">User Information</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#menu1">My Orders</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#menu2">Password</a>
                    </li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content">
                    <div class="tab-pane container active" id="home">...</div>
                    <div class="tab-pane container fade" id="menu1">...</div>
                    <div class="tab-pane container fade" id="menu2">...</div>
                </div>
            </div>
        </div>
    </div>
    @endsection
