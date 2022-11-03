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
                                <h2>Products</h2>
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
                                <!-- product-item start -->
                                @foreach ($products as $product)
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6 mb-8">
                                    @include('front.inc.product')
                                    @include('front.inc.details_modal')
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
