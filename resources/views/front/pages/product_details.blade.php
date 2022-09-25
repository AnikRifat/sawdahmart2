@extends('front.layouts.app')
@section('content')
<div class="main-body">
    <!-- content starts here -->

    <!-- PAGE BANNER SECTION -->
    <div class="page-banner-section section">
        <div class="container">
            <div class="row">
                <div class="page-banner-content col-xs-12">
                    <h2>Product Details</h2>
                    <ul class="breadcrumb">
                        <li><a href="index-2.html">Home</a></li>
                        <li class="active">Product Details</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- END PAGE BANNER SECTION -->

    <!-- PAGE SECTION START -->
    <div class="page-section section pt-100 pb-60">
        <div class="container">
            <div class="row mb-40">
                <div class="col-12 col-md-6 col-lg-4 mb-40">
                    <!-- Tab panes -->
                    <div class="tab-content mb-10">
                        <div class="pro-large-img tab-pane active" id="pro-large-img-1">
                            <img src="{{ asset('/') }}assets/images/product/{{ $product->image }}" alt="Image" />
                        </div>
                        @if($product->image_2)
                        <div class="pro-large-img tab-pane" id="pro-large-img-2">
                            <img src="{{ asset('/') }}assets/images/product/{{ $product->image_2 }}" alt="Image" />
                        </div>
                        @endif
                        @if($product->image_3)
                        <div class="pro-large-img tab-pane" id="pro-large-img-3">
                            <img src="{{ asset('/') }}assets/images/product/{{ $product->image_3 }}" alt="Image" />
                        </div>
                        @endif

                    </div>
                    <!-- Nav tabs -->
                    <div class="pro-thumb-img-slider nav">
                        <div><a href="#pro-large-img-1" data-bs-toggle="tab"><img
                                  src="{{ asset('/') }}assets/images/product/{{ $product->image }}" alt="Image" /></a>
                        </div>
                        @if($product->image_2)
                        <div><a href="#pro-large-img-2" data-bs-toggle="tab"><img
                                  src="{{ asset('/') }}assets/images/product/{{ $product->image_2 }}" alt="Image" /></a>
                        </div>
                        @endif
                        @if($product->image_3)
                        <div><a href="#pro-large-img-2" data-bs-toggle="tab"><img
                                  src="{{ asset('/') }}assets/images/product/{{ $product->image_3 }}" alt="Image" /></a>
                        </div>
                        @endif
                        @if($product->image_2)
                        <div><a href="#pro-large-img-2" data-bs-toggle="tab"><img
                                  src="{{ asset('/') }}assets/images/product/{{ $product->image_2 }}" alt="Image" /></a>
                        </div>
                        @endif
                        @if($product->image_3)
                        <div><a href="#pro-large-img-2" data-bs-toggle="tab"><img
                                  src="{{ asset('/') }}assets/images/product/{{ $product->image_3 }}" alt="Image" /></a>
                        </div>
                        @endif



                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-8 mb-40">
                    <div class="product-details">
                        <h2 class="title">{{ $product->name }}</h2>
                        <span class="price section"><span class="new">${{ $product->price }}.00</span></span>

                        <div class="short-desc section">
                            <p><strong>Quick Overview:</strong> {!! $product->details !!}</p>
                        </div>

                        <div class="quantity-cart section">
                            <button type="button" class="add-to-cart"
                              onclick="cartLS.add({id: {{ $product->id }}, name: '{{ $product->name }}', price: {{ $product->price }}})">add
                                to
                                cart</button>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <h2 class="despro">Product Description</h2>

                    <div class="container">
                        {!! $product->description !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- PAGE SECTION END -->
    <!-- PRODUCT SECTION START -->
    {{-- <div class="product-section section pb-100">
        <div class="container">
            <div class="section-title text-center mb-70">
                <h2>related products</h2>
            </div>
            <div class="row">
                <div class="product-slider product-slider-4 slick-space">
                    <!-- product-item start -->
                    <div class="product-item text-center">
                        <div class="product-img">
                            <a class="image" href="product-details.php"><img
                                  src="{{ asset('/') }}assets/img/product/1.jpg" alt="" /></a>
    <a href="cart#" class="add-to-cart">add to cart</a>
    <div class="action-btn fix">
        <!-- <a href="wishlist#" title="Wishlist"><i class="pe-7s-like"></i></a> -->
        <a href="product-details.php" title="Quickview"><i class="pe-7s-look"></i></a>
        <!-- <a href="product-details.php" title="Compare"><i class="pe-7s-repeat"></i></a> -->
    </div>
</div>
<div class="product-info">
    <h5 class="title"><a href="product-details.php">Le Parc Minotti Chair</a></h5>
    <span class="price"><span class="new">$169.00</span></span>
</div>
</div>
<!-- product-item end -->
<!-- product-item start -->
<div class="product-item text-center">
    <div class="product-img">
        <a class="image" href="product-details.php"><img src="{{ asset('/') }}assets/img/product/1.jpg" alt="" /></a>
        <a href="cart#" class="add-to-cart">add to cart</a>
        <div class="action-btn fix">
            <!-- <a href="wishlist#" title="Wishlist"><i class="pe-7s-like"></i></a> -->
            <a href="product-details.php" title="Quickview"><i class="pe-7s-look"></i></a>
            <!-- <a href="product-details.php" title="Compare"><i class="pe-7s-repeat"></i></a> -->
        </div>
    </div>
    <div class="product-info">
        <h5 class="title"><a href="product-details.php">Le Parc Minotti Chair</a></h5>
        <span class="price"><span class="new">$169.00</span></span>
    </div>
</div>
<!-- product-item end -->
<!-- product-item start -->
<div class="product-item text-center">
    <div class="product-img">
        <a class="image" href="product-details.php"><img src="{{ asset('/') }}assets/img/product/1.jpg" alt="" /></a>
        <a href="cart#" class="add-to-cart">add to cart</a>
        <div class="action-btn fix">
            <!-- <a href="wishlist#" title="Wishlist"><i class="pe-7s-like"></i></a> -->
            <a href="product-details.php" title="Quickview"><i class="pe-7s-look"></i></a>
            <!-- <a href="product-details.php" title="Compare"><i class="pe-7s-repeat"></i></a> -->
        </div>
    </div>
    <div class="product-info">
        <h5 class="title"><a href="product-details.php">Le Parc Minotti Chair</a></h5>
        <span class="price"><span class="new">$169.00</span></span>
    </div>
</div>
<!-- product-item end -->
<!-- product-item start -->
<div class="product-item text-center">
    <div class="product-img">
        <a class="image" href="product-details.php"><img src="{{ asset('/') }}assets/img/product/1.jpg" alt="" /></a>
        <a href="cart#" class="add-to-cart">add to cart</a>
        <div class="action-btn fix">
            <!-- <a href="wishlist#" title="Wishlist"><i class="pe-7s-like"></i></a> -->
            <a href="product-details.php" title="Quickview"><i class="pe-7s-look"></i></a>
            <!-- <a href="product-details.php" title="Compare"><i class="pe-7s-repeat"></i></a> -->
        </div>
    </div>
    <div class="product-info">
        <h5 class="title"><a href="product-details.php">Le Parc Minotti Chair</a></h5>
        <span class="price"><span class="new">$169.00</span></span>
    </div>
</div>
<!-- product-item end -->
<!-- product-item start -->
<div class="product-item text-center">
    <div class="product-img">
        <a class="image" href="product-details.php"><img src="{{ asset('/') }}assets/img/product/1.jpg" alt="" /></a>
        <a href="cart#" class="add-to-cart">add to cart</a>
        <div class="action-btn fix">
            <!-- <a href="wishlist#" title="Wishlist"><i class="pe-7s-like"></i></a> -->
            <a href="product-details.php" title="Quickview"><i class="pe-7s-look"></i></a>
            <!-- <a href="product-details.php" title="Compare"><i class="pe-7s-repeat"></i></a> -->
        </div>
    </div>
    <div class="product-info">
        <h5 class="title"><a href="product-details.php">Le Parc Minotti Chair</a></h5>
        <span class="price"><span class="new">$169.00</span></span>
    </div>
</div>
<!-- product-item end -->
<!-- product-item start -->
<div class="product-item text-center">
    <div class="product-img">
        <a class="image" href="product-details.php"><img src="{{ asset('/') }}assets/img/product/1.jpg" alt="" /></a>
        <a href="cart#" class="add-to-cart">add to cart</a>
        <div class="action-btn fix">
            <!-- <a href="wishlist#" title="Wishlist"><i class="pe-7s-like"></i></a> -->
            <a href="product-details.php" title="Quickview"><i class="pe-7s-look"></i></a>
            <!-- <a href="product-details.php" title="Compare"><i class="pe-7s-repeat"></i></a> -->
        </div>
    </div>
    <div class="product-info">
        <h5 class="title"><a href="product-details.php">Le Parc Minotti Chair</a></h5>
        <span class="price"><span class="new">$169.00</span></span>
    </div>
</div>
<!-- product-item end -->
<!-- product-item start -->
<div class="product-item text-center">
    <div class="product-img">
        <a class="image" href="product-details.php"><img src="{{ asset('/') }}assets/img/product/1.jpg" alt="" /></a>
        <a href="cart#" class="add-to-cart">add to cart</a>
        <div class="action-btn fix">
            <!-- <a href="wishlist#" title="Wishlist"><i class="pe-7s-like"></i></a> -->
            <a href="product-details.php" title="Quickview"><i class="pe-7s-look"></i></a>
            <!-- <a href="product-details.php" title="Compare"><i class="pe-7s-repeat"></i></a> -->
        </div>
    </div>
    <div class="product-info">
        <h5 class="title"><a href="product-details.php">Le Parc Minotti Chair</a></h5>
        <span class="price"><span class="new">$169.00</span></span>
    </div>
</div>
<!-- product-item end -->
<!-- product-item start -->
<div class="product-item text-center">
    <div class="product-img">
        <a class="image" href="product-details.php"><img src="{{ asset('/') }}assets/img/product/1.jpg" alt="" /></a>
        <a href="cart#" class="add-to-cart">add to cart</a>
        <div class="action-btn fix">
            <!-- <a href="wishlist#" title="Wishlist"><i class="pe-7s-like"></i></a> -->
            <a href="product-details.php" title="Quickview"><i class="pe-7s-look"></i></a>
            <!-- <a href="product-details.php" title="Compare"><i class="pe-7s-repeat"></i></a> -->
        </div>
    </div>
    <div class="product-info">
        <h5 class="title"><a href="product-details.php">Le Parc Minotti Chair</a></h5>
        <span class="price"><span class="new">$169.00</span></span>
    </div>
</div>
<!-- product-item end -->

</div>
</div>
</div>
</div> --}}
<!-- PRODUCT SECTION END -->

<!-- content Ends here -->
</div>
@endsection