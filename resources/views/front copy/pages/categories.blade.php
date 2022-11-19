@extends('front.layouts.app')
@section('content')
<div class="main-body">
    <!-- PAGE BANNER SECTION -->
    <div class="page-banner-section section">
        <div class="container">
            <div class="row">
                <div class="page-banner-content col-xs-12">
                    {{-- <h2>{{ $cate->name }}</h2> --}}
                    <div class="section-title ">
                        <div class="d-flex justify-content-between align-items-center title-custom">
                            <div>
                                <h2>Categories</h2>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END PAGE BANNER SECTION -->

    <!-- PAGE SECTION START -->
    <div class="page-section section pt-100 pb-60">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-12 order-lg-1 order-0">
                    <div class="shop-bar mb-6">
                    </div>
                    <div class="tab-content section">
                        <div class="tab-pane active" id="product-grid">
                            <div class="row">
                                @foreach ($categories as $item)
                                <div class="col-md-4 col-lg-3 col-6 text-center">
                                    <a href="{{ route('category',$item->id) }}">
                                        <div class="card category ">
                                            <div class="card-body">
                                                <img class="img-fluid" style="
                                                height: 100px;
                                                width: fit-content;
                                            " src="{{ asset('/') }}assets/images/category/{{ $item->image }}" alt="">
                                                <h6 class="mt-2">{{ $item->name }}</h6>
                                            </div>

                                        </div>
                                    </a>
                                </div>
                                @endforeach


                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- PAGE SECTION END -->


</div>
@endsection
