<!doctype html>
<html lang="en">

    <head>

        <meta charset="utf-8" />
        <title>{{ $content->name }}
        </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ asset('/') }}assets/images/logo/{{ $content->logo }}">
        <!-- plugin css -->
        <link href="{{ asset('/') }}assets/admin/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.css"
          rel="stylesheet" type="text/css" />

        {{-- <link href="https://unpkg.com/filepond@^4/dist/filepond.css" rel="stylesheet" /> --}}
        <!-- preloader css -->
        <link rel="stylesheet" href="{{ asset('/') }}assets/admin/css/preloader.min.css" type="text/css" />
        <link rel="stylesheet" href="{{ asset('/') }}assets/admin/libs/sweetalert2/sweetalert2.min.css"
          type="text/css" />



        <link href="{{ asset('/') }}assets/admin/libs/alertifyjs/build/css/alertify.min.css" rel="stylesheet"
          type="text/css" />
        <!-- Bootstrap Css -->
        <link href="{{ asset('/') }}assets/admin/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet"
          type="text/css" />
        <!-- Icons Css -->
        <link href="{{ asset('/') }}assets/admin/css/icons.min.css" rel="stylesheet" type="text/css" />

        <link href="{{ asset('/') }}assets/admin/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />


    </head>

    <body>

        <!-- <body data-layout="horizontal"> -->

        <!-- Begin page -->
        <div id="layout-wrapper">


            <header id="page-topbar">
                <div class="navbar-header">
                    <div class="d-flex">
                        <!-- LOGO -->
                        <div class="navbar-brand-box">
                            <a href="{{ route('admin') }}" class="logo logo-dark">
                                <span class="logo-sm">
                                    <img src="{{ asset('/') }}assets/images/logo/{{ $content->logo }}" alt=""
                                      height="24">
                                </span>
                                <span class="logo-lg">
                                    <img src="{{ asset('/') }}assets/images/logo/{{ $content->logo }}" alt=""
                                      height="24">
                                    <span class="logo-txt">{{ $content->name }}</span>
                                </span>
                            </a>

                            <a href="{{ route('admin') }}" class="logo logo-light">
                                <span class="logo-sm">
                                    <img src="{{ asset('/') }}assets/images/logo/{{ $content->logo }}" alt=""
                                      height="24">
                                </span>
                                <span class="logo-lg">
                                    <img src="{{ asset('/') }}assets/images/logo/{{ $content->logo }}" alt=""
                                      height="24"> <span class="logo-txt">{{ $content->name }}</span>
                                </span>
                            </a>
                        </div>

                        <button type="button" class="btn btn-sm px-3 font-size-16 header-item" id="vertical-menu-btn">
                            <i class="fa fa-fw fa-bars"></i>
                        </button>

                        <!-- App Search-->
                        <form class="app-search d-none d-lg-block">
                            <div class="position-relative">
                                <input type="text" class="form-control" placeholder="Search...">
                                <button class="btn btn-primary" type="button"><i
                                      class="bx bx-search-alt align-middle"></i></button>
                            </div>
                        </form>
                    </div>

                    <div class="d-flex">

                        <div class="dropdown d-inline-block d-lg-none ms-2">
                            <button type="button" class="btn header-item" id="page-header-search-dropdown"
                              data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i data-feather="search" class="icon-lg"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                              aria-labelledby="page-header-search-dropdown">

                                <form class="p-3">
                                    <div class="form-group m-0">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Search ..."
                                              aria-label="Search Result">

                                            <button class="btn btn-primary" type="submit"><i
                                                  class="mdi mdi-magnify"></i></button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>



                        <div class="dropdown d-none d-sm-inline-block">
                            <button type="button" class="btn header-item" id="mode-setting-btn">
                                <i data-feather="moon" class="icon-lg layout-mode-dark"></i>
                                <i data-feather="sun" class="icon-lg layout-mode-light"></i>
                            </button>
                        </div>






                        <div class="dropdown d-inline-block">
                            <button type="button" class="btn header-item bg-soft-light border-start border-end"
                              id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true"
                              aria-expanded="false">
                                <img class="rounded-circle header-profile-user"
                                  src="{{ asset('/') }}assets/admin/images/users/avatar-1.jpg" alt="Header Avatar">
                                <span class="d-none d-xl-inline-block ms-1 fw-medium">{{ Auth::user()->name }}</span>
                                <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end">
                                <!-- item-->
                                {{-- <a class="dropdown-item" href="apps-contacts-profile.html"><i
                                      class="mdi mdi-face-profile font-size-16 align-middle me-1"></i> Profile</a>
                                <a class="dropdown-item" href="auth-lock-screen.html"><i
                                      class="mdi mdi-lock font-size-16 align-middle me-1"></i> Lock Screen</a> --}}
                                <div class="dropdown-divider"></div>
                                <form action="{{ route('logout') }}" method="POST">
                                    @csrf
                                    <button class="dropdown-item" type="submit"><i
                                          class="mdi mdi-logout font-size-16 align-middle me-1"></i> Logout</button>
                                </form>

                            </div>
                        </div>

                    </div>
                </div>
            </header>





            @include('admin.inc.sidebar')
