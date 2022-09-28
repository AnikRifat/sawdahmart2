@extends('front.layouts.app')
@section('content')
<div class="main-body">
    <style>
        .tab-pane.active {
            padding: 0;
        }
    </style>
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
        @if ($massage = Session::get('success'))
        <div class="alert alert-success">
            <strong>Success!</strong> {{ $massage }}
        </div>
        @endif
        @if ($massage = Session::get('error'))
        <div class="alert alert-danger">
            <strong>Error!</strong> {{ $massage }}
        </div>
        @endif
        <div class="row">
            <div class="col-md-3 border-right">
                <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5"
                      width="150px"
                      src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg"><span
                      class="font-weight-bold">hi, {{ $user->name }}</span><span
                      class="text-black-50">{{ $user->email }}</span><span> </span></div>
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
                <div class="tab-content ">
                    <div class="tab-pane container active" id="home">

                        <div class="card">
                            <div class="card-body">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="f-left user-text">

                                                <ul>
                                                    <li><strong>name :</strong> {{ $user->name }}</li>
                                                    <li><strong>email :</strong> {{ $user->email }}</li>
                                                    <li><strong>Phone :</strong> {{ $user->phone }}</li>
                                                    <li><strong>address :</strong> {{ $user->address }}</li>
                                                    <li><strong>city :</strong> {{ $user->city }}</li>
                                                    <li><strong>country :</strong> {{ $user->country }}</li>
                                                    {{-- <li><strong>address :</strong> {{ $user->address }}</li> --}}

                                                </ul>
                                            </div>

                                        </div>
                                        <div class="col-md-12">
                                            <a href="{{ route('user.edit') }}" class="btn btn-primary">edit</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>




                    </div>
                    <div class="tab-pane container fade" id="menu1">
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>sl no.</th>
                                        <th>Tracking ID</th>
                                        <th>Invoice</th>
                                        <th>date</th>
                                        <th>action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if (!$orders)

                                    <tr>No Ordders yet</tr>

                                    @else
                                    @foreach ($orders as $item)
                                    <tr>
                                        <td>#</td>
                                        <td>{{ $item->track_id }}</td>
                                        <td>{{ $item->invoice }}</td>
                                        <td>{{ $item->date }}</td>
                                        <td><a href="{{route('user.order.view',$item->id)  }}"
                                              class="btn btn-primary">View</a> </td>
                                    </tr>
                                    @endforeach
                                    @endif


                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="tab-pane container fade" id="menu2">
                        <form action="{{ route('user.password.update') }}" method="POST">
                            @csrf
                            @method('put')
                            <div class="mb-3 mt-3">
                                <label for="oldpass" class="form-label">Current
                                    Password:</label>
                                <input type="password" class="form-control" id="oldpass"
                                  placeholder="Enter Current password" name="current_password">
                            </div>
                            <div class="mb-3">
                                <label for="newpass" class="form-label">New Password:</label>
                                <input type="password" class="form-control" id="newpass" placeholder="Enter password"
                                  name="new_password">
                            </div>
                            <div class="mb-3">
                                <label for="renewpass" class="form-label">Retype New
                                    Password:</label>
                                <input type="password" class="form-control" id="renewpass" placeholder="Enter password"
                                  name="re_new_password">
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                    @endsection
