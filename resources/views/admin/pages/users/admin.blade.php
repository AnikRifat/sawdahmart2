@extends('admin.layouts.app')
@section('content')
<!-- ============================================================== -->
<!-- Start Content here -->
<!-- ============================================================== -->
<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">
            <ul class="nav nav-pills nav-justified" role="tablist">
                <li class="nav-item waves-effect waves-light">
                    <a class="nav-link active" data-bs-toggle="tab" href="#info" role="tab" aria-selected="false">
                        <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
                        <span class="d-none d-sm-block">Information</span>
                    </a>
                </li>
                <li class="nav-item waves-effect waves-light">
                    <a class="nav-link" data-bs-toggle="tab" href="#password" role="tab" aria-selected="false">
                        <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
                        <span class="d-none d-sm-block">Password</span>
                    </a>
                </li>
            </ul>


            <div class="tab-content p-3 text-muted">
                <div class="tab-pane active" id="info" role="tabpanel">
                    <div class="card h-100">
                        <div class="card-body">
                            <form action="{{ route('admin.info.update') }}" method="POST">
                                @csrf
                                {{-- @method('put') --}}
                                <div class="row gutters">

                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                        <div class="form-group">
                                            <label for="fullName">Full Name</label>
                                            <input type="text" class="form-control" name="name" id="fullName"
                                              placeholder="Enter full name" value="{{ $user->name }}">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                        <div class="form-group">
                                            <label for="eMail">Email</label>
                                            <input type="email" class="form-control" name="email" id="eMail"
                                              placeholder="Enter email ID" value="{{ $user->email }}">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                        <div class="form-group">
                                            <label for="phone">Phone</label>
                                            <input type="text" class="form-control" name="phone" id="phone"
                                              placeholder="Enter phone number" value="{{ $user->phone }}">
                                        </div>
                                    </div>

                                </div>
                                <div class=" row gutters">
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                        <div class="form-group">
                                            <label for="address">Street</label>
                                            <input type="name" class="form-control" name="address" id="address"
                                              placeholder="Enter address" value="{{ $user->address }}"">
                                        </div>
                                    </div>
                                    <div class=" col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                            <div class="form-group">
                                                <label for="ciTy">City</label>
                                                <input type="name" class="form-control" name="city" id="ciTy"
                                                  placeholder="Enter City" value="{{ $user->city }}"">
                                            </div>
                                        </div>
                                        <div class=" col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                                <div class="form-group">
                                                    <label for="country">country</label>
                                                    <input type="text" class="form-control" name="country" id="country"
                                                      placeholder="Enter country" value="{{ $user->country }}"">
                                                </div>
                                            </div>
                                        <div class=" row gutters">
                                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                        <div class="text-right m-2">
                                                            <button type="submit" id="submit" name="submit"
                                                              class="btn btn-primary">Update</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                            </form>
                        </div>

                    </div>


                </div>

                <div class="tab-pane" id="password" role="tabpanel">
                    <div class="card h-100">
                        <div class="card-body">
                            <form action="{{ route('admin.password.update') }}" method="POST">
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
                                    <input type="password" class="form-control" id="newpass"
                                      placeholder="Enter password" name="new_password">
                                </div>
                                <div class="mb-3">
                                    <label for="renewpass" class="form-label">Retype New
                                        Password:</label>
                                    <input type="password" class="form-control" id="renewpass"
                                      placeholder="Enter password" name="re_new_password">
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
