@extends('front.layouts.app')
@section('content')
@foreach ($products as $product)
@include('front.inc.details_modal')
@endforeach


<div class="slider-area">
    <div class="slider-active owl-carousel">

        @foreach ($sliders as $item)

        <div class="single-slider single-slider-hm1 bg-img ptb-260"
          style="background-image: url({{ asset('/') }}assets/images/slider/{{ $item->image }})">
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
        <h2>Our categories</h2>
        <div class="row">
            @foreach ($categories as $item)
            <div class="col-md-6 col-12">
                <a href="{{ route('category',$item->id) }}">
                    <div class="card category ">
                        <div class="card-body">
                            <h4>{{ $item->name }}</h4>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach

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
<div class="product-collection-area pb-50">
    <div class="electronic-product">
        <div class="section-title text-center mb-55">
            <h2>Featured Products</h2>
            <p>It is a long established fact that a reader will be distracted by the readable content of a page when
                look</p>
        </div>
        <div class="row">

            <!-- product-item start -->

            @foreach ($products as $product)
            <div class="col-md-6 col-lg-4 col-xl-3 col-sm-6 col-12">
                @include('front.inc.product')

            </div>

            @endforeach

            {{-- <div class="col-md-6 col-lg-4 col-xl-3 col-sm-6 col-12">

                </div> --}}
        </div>
    </div>
</div>



@if($reviews)
<div class="testimonial-area bg-img pt-120 pb-115" style="background: #212529;" data-overlay="56">
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
