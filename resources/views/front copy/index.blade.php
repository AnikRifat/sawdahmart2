@extends('front.layouts.app')
{{-- <div class="popup_wrapper hidden-sm hidden-xs">

    <div class="test">
        <span class="popup_off">Close</span>
        <a href="{{ $content->slider_text }}">
<img src="{{ asset('/') }}assets/images/{{ $content->slider }}" class="img-fluid" alt="">
</a>
</div>

</div> --}}
@section('content')
@foreach ($products as $product)
@include('front.inc.details_modal')
@endforeach
<!-- Newsletter Popup Start -->

<!-- Newsletter Popup End -->

<div class="slider-area pt-5">
    <div class="slider-active owl-carousel">

        @foreach ($sliders as $item)
        <div class="single-slider single-slider-hm1 bg-img ptb-260" class="img-fluid"
          style="background-image: url({{ asset('/') }}assets/images/slider/{{ $item->image }});background-repeat: no-repeat;background-size:contain;">
        </div>

        @endforeach

    </div>
</div>


{{-- <div class="shop-limited-area bg-img pt-90 pb-100"
  style="background-image: url({{ asset('/') }}assets/images/{{ $content->slider }})" data-overlay="3">
<div class="container">
    <div class="shop-limited-content">
        <h2>{{ $content->name }}</h2>
        <h5>{{ $content->slider_text }}</h5>
    </div>
</div>
</div> --}}

<div class="category-area pt-40 pb-50">
    <div class="section-title text-center mb-55">
        <div class="section-title mb-55">
            <div class="d-flex justify-content-between align-items-center title-custom">
                <div>
                    <h2>Our Categories</h2>
                </div>
                <div><a href="{{ url('/categories') }}" class="btn btn-danger rounded p-1">
                        <h5 class="text-light "> <b> view all </b><span><i class="ion-arrow-right-c ml-2 "></i></span>
                        </h5>
                    </a></div>
            </div>

        </div>
        <div class="owl-category owl-carousel">
            @foreach ($home_categories as $item)
            <div class="item ">
                <a href="{{ route('category',$item->id) }}">
                    <div class="card text-center category " style="
                    height: 8rem;
                ">
                        <div class="card-body">
                            <img class="img-fluid mx-auto" style="
                            height: 50px;
                            width: fit-content;
                        " src="{{ asset('/') }}assets/images/category/{{ $item->image }}" alt="">
                            <h6 class="mt-2 text-ellipsis-2">{{ $item->name }}</h6>
                        </div>

                    </div>
                </a>
            </div>
            @endforeach

        </div>

    </div>
</div>


<div class="product-collection-area pb-50">
    <div class="electronic-product">
        <div class="section-title mb-55">
            <div class="d-flex justify-content-between align-items-center title-custom">
                <div>
                    <h2>Our Leatest Products</h2>
                </div>
                <div><a href="{{ route('products') }}" class="btn btn-danger rounded p-1">
                        <h5 class="text-light "> <b> view all </b><span><i class="ion-arrow-right-c ml-2 "></i></span>
                        </h5>
                    </a></div>
            </div>

        </div>
        <div class="row">

            <!-- product-item start -->

            @foreach ($homeProduct as $product)
            <div class="col-md-4 col-lg-4 col-xl-3 col-sm-6 col-6">
                @include('front.inc.product')

            </div>

            @endforeach

            <div class="col-12 col-lg-12 text-center">
                <a href="{{ route('products') }}" class="btn btn-block w-50 btn-more">
                    View More
                </a>
            </div>
        </div>
    </div>
</div>
<div class="banner-area pt-40 pb-70">
    <div class="banner-2-all container-fluid p-0">
        <div class="row">
            <div class="col-md-6 col-lg-6 col-xl-6 col-12">
                <div class="single-banner-2 mb-30">
                    <img src="{{ asset('/') }}assets/images/{{ $content->tvc1 }}" alt="">
                    {{-- <div class="banner-content-2">
                            <span>Sound Box</span>
                            <h4>Sale 30% Off</h4>
                            <a href="#">Shop Now</a>
                        </div> --}}
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-6 col-12">
                <div class="single-banner-2 mb-30">
                    <img src="{{ asset('/') }}assets/images/{{ $content->tvc2 }}" alt="">
                    {{-- <div class="banner-content-2">
                            <span>Sound Box</span>
                            <h4>Sale 30% Off</h4>
                            <a href="#">Shop Now</a>
                        </div> --}}
                </div>
            </div>

        </div>
    </div>
</div>


@if($reviews)
<div class="testimonial-area bg-img pt-120 pb-115" style="background:#1b9589;" data-overlay="56">
    <div class="container">
        <div class="testimonial-active text-center z-index owl-carousel">
            @foreach ($reviews as $review)
            <div class="single-testimonial">
                {{-- <img src="{{ asset('/') }}assets/front/img/team/1.png" alt=""> --}}
                <p>{{ $review->comment }}</p>
                <h4>{{ $review->name }}</h4>
                <span>Customer</span>
            </div>
            @endforeach


        </div>
    </div>
</div>

@endif

@endsection
