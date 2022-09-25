@extends('admin.layouts.app')

@section('content')
<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->
<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">
            <div class="my-5 pt-5">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="text-center mb-5">
                                <h1 class="display-4 fw-semibold">Well<span class="text-primary mx-2">Come</span> !</h1>
                                <div class="row justify-content-center">
                                    <div class="col-md-10 col-xl-8">
                                        <div>
                                            <img src="{{ asset('/') }}assets/images/welcome.png" alt=""
                                              class="img-fluid" style="height: 25rem;">
                                        </div>
                                    </div>
                                    <!-- end row -->
                                </div>
                                <h1 class="display-1 text-primary fw-semibold">Dash<span
                                      class="text-dark mx-2">Board</span></h1>


                            </div>
                        </div>
                    </div>

                    <!-- end row -->
                </div>
                <!-- end container -->
            </div>
        </div>
    </div>
</div>
<!-- end main content-->
@endsection
