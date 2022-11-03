@extends('front.layouts.app')
@section('content')
<div class="breadcrumb-area pt-205 pb-210 bg-img"
  style="background-image: url({{ asset('/') }}assets/images/{{ $content->tvc2 }}">
    <div class="container">
        <div class="breadcrumb-content">
            <h2>shop</h2>
            <ul>
                <li><a href="#">home</a></li>
                <li> shop </li>
            </ul>
        </div>
    </div>
</div>
<div class="shop-page py-4 hidden-items padding-filter">
    <div class="container-fluid">
        <div class="shop-product-content">

            <div class="row">

                @foreach ($products as $product)
                <div class="col-lg-3 col-md-6 col-6">
                    @include('front.inc.product')
                    @include('front.inc.details_modal')
                </div>
                @endforeach
            </div>


        </div>

    </div>
</div>
@endsection
