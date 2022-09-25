@extends('front.layouts.app')
@section('content')
<div class="breadcrumb-area pt-205 pb-210 bg-img"
  style="background-image: url({{ asset('/') }}assets/front/img/bg/breadcrumb.jpg)">
    <div class="container">
        <div class="breadcrumb-content">
            <h2>Search</h2>

        </div>
    </div>
</div>
<div class="shop-page py-4 hidden-items padding-filter">
    <div class="container-fluid">
        <div class="shop-product-content">

            <div class="row">

                @foreach ($data as $product)
                <div class="col-lg-3 col-md-6 col-12">
                    @include('front.inc.product')
                    @include('front.inc.details_modal')
                </div>
                @endforeach
            </div>


        </div>

    </div>
</div>
@endsection
