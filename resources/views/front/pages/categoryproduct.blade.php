@extends('front.layouts.app')
@section('content')
<div class="main-body">
    <!-- content starts here -->

    <!-- PAGE BANNER SECTION -->
    <div class="page-banner-section section">
        <div class="container">
            <div class="row">
                <div class="page-banner-content col-xs-12">
                    <h2>{{ $cate->name }}</h2>

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
                                @foreach ($data as $product)
                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12 mb-8">
                                    @include('front.inc.product')
                                </div>
                                @endforeach

                                <!-- product-item end -->

                                {{-- <div class="page-pagination text-center col-xs-12 fix mb-40">
                                    <ul>
                                        <li><a href="shop#"><i class="fa fa-angle-left"></i></a></li>
                                        <li class="active"><a href="shop#">1</a></li>
                                        <li><a href="shop#">2</a></li>
                                        <li><a href="shop#">3</a></li>
                                        <li><a href="shop#">4</a></li>
                                        <li><a href="shop#"><i class="fa fa-angle-right"></i></a></li>
                                    </ul>
                                </div> --}}

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- PAGE SECTION END -->

    <!-- content Ends here -->
</div>
@endsection