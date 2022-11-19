@extends('front.layouts.app')
@section('content')
<div class="main-body">

    <div class="card h-100">
        <div class="card-body">
            <form action="{{ route('user.info.update') }}" method="POST">
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
                                <input type="name" class="form-control" name="city" id="ciTy" placeholder="Enter City"
                                  value="{{ $user->city }}"">
                                </div>
                            </div>
                            <div class=" col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="form-group">
                                    <label for="country">country</label>
                                    <input type="text" class="form-control" name="country" id="country"
                                      placeholder="Enter country" value="{{ $user->country }}"">
                                    </div>
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
                        </div>
                    </div>

                </div>
            </form>

        </div>
    </div>
</div>
@endsection
