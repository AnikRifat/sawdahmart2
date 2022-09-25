@extends('admin.layouts.app')
@section('content')
<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->
<div class="main-content">
    @foreach ($errors->all() as $error)
    <li>{{ $error }}</li>
    @endforeach
    <div class="page-content">
        <div class="container-fluid">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0 font-size-18">Basic Elements</h4>


            </div>


            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Justify Tabs</h4>
                </div><!-- end card header -->

                <div class="card-body">
                    <!-- Nav tabs -->
                    <ul class="nav nav-pills nav-justified" role="tablist">
                        <li class="nav-item waves-effect waves-light">
                            <a class="nav-link active" data-bs-toggle="tab" href="#website" role="tab"
                              aria-selected="false">
                                <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
                                <span class="d-none d-sm-block">Website</span>
                            </a>
                        </li>
                        <li class="nav-item waves-effect waves-light">
                            <a class="nav-link" data-bs-toggle="tab" href="#slider" role="tab" aria-selected="false">
                                <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
                                <span class="d-none d-sm-block">Slider</span>
                            </a>
                        </li>
                        <li class="nav-item waves-effect waves-light">
                            <a class="nav-link " data-bs-toggle="tab" href="#TVC" role="tab" aria-selected="true">
                                <span class="d-block d-sm-none"><i class="fas fa-cog"></i></span>
                                <span class="d-none d-sm-block">Banner</span>
                            </a>
                        </li>
                        <li class="nav-item waves-effect waves-light">
                            <a class="nav-link" data-bs-toggle="tab" href="#contact" role="tab" aria-selected="true">
                                <span class="d-block d-sm-none"><i class="fas fa-cog"></i></span>
                                <span class="d-none d-sm-block">contact</span>
                            </a>
                        </li>
                    </ul>

                    <!-- Tab panes -->
                    <form action="{{ route('contentedit', $content->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('put')


                        <div class="tab-content p-3 text-muted">
                            <div class="tab-pane active" id="website" role="tabpanel">
                                <p class="mb-0">
                                <div class="mb-4">
                                    <label class="form-label" for="name">Website Name</label>
                                    <input class="form-control" type="text" id="name" name="name"
                                      placeholder="Website name" value="{{ $content->name }}">
                                </div>
                                <div class="mb-4">
                                    <label class="form-label" for="logo">Website logo <small>(400 x 330 px ||
                                            PNG)</small></label>
                                    <img src="{{ asset('/') }}assets/images/logo/{{ $content->logo }}" alt=""
                                      height="200" width="200">
                                    <input class="form-control" type="file" id="logo" name="logo">
                                </div>
                                </p>
                            </div>
                            <div class="tab-pane" id="slider" role="tabpanel">
                                <p class="mb-0">
                                <div class="mb-4">
                                    <label class="form-label" for="slider_text">Slider Text</label>
                                    <input class="form-control" type="text" id="slider_text" name="slider_text"
                                      placeholder="Slider Text" value="{{ $content->slider_text }}">
                                </div>
                                <div class="mb-4">
                                    <label class="form-label" for="slider">Website slider <small>(PNG)</small></label>
                                    <img src="{{ asset('/') }}assets/images/{{ $content->slider }}" alt="" height="200"
                                      width="200">
                                    <input class="form-control" type="file" id="slider" name="slider">
                                </div>
                                </p>
                            </div>

                            <div class="tab-pane " id="TVC" role="tabpanel">
                                <p class="mb-0">
                                <div class="mb-4">
                                    <label class="form-label" for="tvc1">Website banner 1 <small>(570 x 285 px ||
                                            PNG , JPG)</small></label>
                                    <img src="{{ asset('/') }}assets/images/{{ $content->tvc1 }}" alt="" height="200"
                                      width="200">
                                    <input class="form-control" type="file" id="tvc1" name="tvc1">
                                </div>
                                <div class="mb-4">
                                    <label class="form-label" for="tvc2">Website banner 2 <small>(570 x 285 px ||
                                            PNG , JPG)</small></label>
                                    <img src="{{ asset('/') }}assets/images/{{ $content->tvc2 }}" alt="" height="200"
                                      width="200">
                                    <input class="form-control" type="file" id="tvc2" name="tvc2">
                                </div>
                                </p>
                            </div>
                            <div class="tab-pane" id="contact" role="tabpanel">
                                <p class="mb-0">
                                <div class="mb-4">
                                    <label class="form-label" for="email">Website email</label>
                                    <input class="form-control" type="text" id="email" name="email" placeholder="email"
                                      value="{{ $content->email }}">
                                </div>
                                <div class="mb-4">
                                    <label class="form-label" for="address">Website address</label>
                                    <input class="form-control" type="text" id="address" name="address"
                                      placeholder="address" value="{{ $content->address }}">
                                </div>
                                <div class="mb-4">
                                    <label class="form-label" for="phone">Website phone</label>
                                    <input class="form-control" type="text" id="phone" name="phone" placeholder="phone"
                                      value="{{ $content->phone }}">
                                </div>

                                </p>
                            </div>
                        </div>

                        <div class="mt-4">
                            <button type="submit" class="btn btn-primary w-md">Submit</button>
                        </div>
                    </form>

                </div><!-- end card-body -->
            </div>







        </div>
    </div>
</div>
@endsection
