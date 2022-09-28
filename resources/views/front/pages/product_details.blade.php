@extends('front.layouts.app')
@section('content')
@php
// $color = DB::table('productcolors')->where('product_id', $product->product_id)->get();




@endphp
<div class="main-body">
    <div class="product-details ptb-100 pb-90">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="product-details-btn">
                        <a href="#"><i class="ion-arrow-left-c"></i></a>
                        <a class="active" href="#"><i class="ion-arrow-right-c"></i></a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-lg-7 col-12">
                    <div class="product-details-img-content">
                        <div class="product-details-tab mr-70">
                            <div class="product-details-large tab-content">
                                <div class="tab-pane active show fade" id="pro-details1" role="tabpanel">
                                    <div class="easyzoom easyzoom--overlay">
                                        <a href="{{ asset('/') }}assets/images/product/{{ $product->image }}">
                                            <img src="{{ asset('/') }}assets/images/product/{{ $product->image }}"
                                              alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="pro-details2" role="tabpanel">
                                    <div class="easyzoom easyzoom--overlay">
                                        <a href="{{ asset('/') }}assets/images/product/{{ $product->image_2 }}">
                                            <img src="{{ asset('/') }}assets/images/product/{{ $product->image_2 }}"
                                              alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="pro-details3" role="tabpanel">
                                    <div class="easyzoom easyzoom--overlay">
                                        <a href="{{ asset('/') }}assets/images/product/{{ $product->image_3 }}">
                                            <img src="{{ asset('/') }}assets/images/product/{{ $product->image_3 }}"
                                              alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="pro-details4" role="tabpanel">
                                    <div class="easyzoom easyzoom--overlay">
                                        <a href="{{ asset('/') }}assets/images/product/{{ $product->image_4 }}">
                                            <img src="{{ asset('/') }}assets/images/product/{{ $product->image_4 }}"
                                              alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="pro-details5" role="tabpanel">
                                    <div class="easyzoom easyzoom--overlay">
                                        <a href="{{ asset('/') }}assets/images/product/{{ $product->image_5 }}">
                                            <img src="{{ asset('/') }}assets/images/product/{{ $product->image_5 }}"
                                              alt="">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-details-small nav mt-12 main-product-details" role=tablist>
                                <a class="active mr-10" href="#pro-details1" data-bs-toggle="tab" role="tab"
                                  aria-selected="true">
                                    <img src="{{ asset('/') }}assets/images/product/{{ $product->image }}" alt="">
                                </a>

                                @if($product->image_2 != ' ')
                                <a class="mr-10" href="#pro-details2" data-bs-toggle="tab" role="tab"
                                  aria-selected="true">
                                    <img src="{{ asset('/') }}assets/images/product/{{ $product->image_2 }}" alt="">
                                </a>
                                @endif
                                @if($product->image_3 != ' ')
                                <a class="mr-10" href="#pro-details3" data-bs-toggle="tab" role="tab"
                                  aria-selected="true">
                                    <img src="{{ asset('/') }}assets/images/product/{{ $product->image_3 }}" alt="">
                                </a>
                                @endif
                                @if($product->image_4 != ' ')
                                <a class="mr-10" href="#pro-details4" data-bs-toggle="tab" role="tab"
                                  aria-selected="true">
                                    <img src="{{ asset('/') }}assets/images/product/{{ $product->image_4 }}" alt="">
                                </a>
                                @endif
                                @if($product->image_5 != ' ')
                                <a class="mr-10" href="#pro-details5" data-bs-toggle="tab" role="tab"
                                  aria-selected="true">
                                    <img src="{{ asset('/') }}assets/images/product/{{ $product->image_5 }}" alt="">
                                </a>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-5 col-12">
                    <div class="product-details-content">
                        <h3>{{ $product->name  }}</h3>

                        <div class="details-price">
                            <span>BDT {{ $product->price  }}</span>
                        </div>
                        <p>{!! $product->details !!}</p>
                        <div class="quick-view-select">
                            {{-- @php
                            dd(count($sizes) > 1); @endphp --}}
                            @if (count($sizes) > 1) <div class="select-option-part">
                                <label>Size*</label>
                                <select class="select" id="size" name="size">
                                    <option value="">- Please Select -</option>
                                    @foreach ($sizes as $item)
                                    <option value="{{ $item->size->name  }}">{{ $item->size->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            @endif

                            @if (count($colors) > 1) <div class="select-option-part">
                                <label>Color*</label>
                                <select class="select" id="color" name="color">
                                    <option value="">- Please Select -</option>
                                    @foreach ($colors as $item)
                                    <option value="{{ $item->color->name }}"
                                      style="background-color:{{ $item->color->color }} ">
                                        {{ $item->color->name }}
                                    </option>
                                    @endforeach
                                </select>
                            </div>
                            @endif

                        </div>
                        <div class="quickview-plus-minus">

                            <div class="quickview-btn-cart">
                                <a onclick="addCart{{ $product->id }}();"
                                  class="btn-hover-black cart_btn{{ $product->id }}"
                                  id="cart_btn{{ $product->id }}"></a>
                            </div>
                            <script>
                                function addCart{{ $product->id }}(){
                                     let size;
                                     let color;
                                    if (document.getElementById('size') == null || document.getElementById('size') == undefined) {
                                         size = 'no';

                                    }else{
                                        size = document.getElementById('size').value;
                                    }
                                    if (document.getElementById('color') == null || document.getElementById('color') == undefined) {
                                        color = 'no';

                                    }else{
                                         color = document.getElementById('color').value;
                                    }
                                    cartLS.add({
                                        id: {{ $product->id }},
                                        name: `{{ $product->name }}`,
                                        image:`{{$product->image }}`,
                                        price: `{{ $product->price }}`,
                                        size:`${size}`,
                                        color:`${color}`
                                    })
                                    window.location = "{{ route('cart') }}";
                                }

                            </script>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="product-description-review-area pb-100">
        <div class="container">
            <div class="product-description-review text-center">
                <div class="description-review-title nav" role=tablist>
                    <a class="active" href="#pro-dec" data-bs-toggle="tab" role="tab" aria-selected="true">
                        Description
                    </a>

                </div>
                <div class="description-review-text tab-content">
                    <div class="tab-pane active show fade" id="pro-dec" role="tabpanel">
                        <p>{!! $product->description !!}</p>
                    </div>

                </div>
            </div>
        </div>
    </div>
    {{-- <div class="product-collection-area pb-60">
        <div class="container">
            <div class="section-title text-center mb-55">
                <h2>Related products</h2>
            </div>
            <div class="new-collection-slider owl-carousel">
                <div class="single-product mb-35">
                    <div class="product-img">
                        <a href="#"><img src="assets/img/shop/shop-grid-1/1.jpg" alt=""></a>
                        <span>sale</span>
                        <div class="product-action">
                            <a title="Wishlist" class="animate-left" href="#"><i class="ion-ios-heart-outline"></i></a>
                            <a title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"
                              class="animate-right" href="#"><i class="ion-ios-eye-outline"></i></a>
                        </div>
                    </div>
                    <div class="product-content">
                        <div class="product-title-price">
                            <div class="product-title">
                                <h4><a href="product-details-6.html">WOODEN FURNITURE</a></h4>
                            </div>
                            <div class="product-price">
                                <span>$110.00</span>
                            </div>
                        </div>
                        <div class="product-cart-categori">
                            <div class="product-cart">
                                <span>Furniter</span>
                            </div>
                            <div class="product-categori">
                                <a href="#"><i class="ion-bag"></i> Add to cart</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div> --}}
</div>
@push('script')
<script>
    function cartSet(){
        var elemntID = 'cart_btn{{ $product->id }}';
        var elemntID2 = 'carts_btn{{ $product->id }}';
        var element = document.getElementById(elemntID);
        var element2 = document.getElementById(elemntID2);

    if (cartLS.get({{ $product->id }})) {

        element.classList.add("cart-added");
        element2.classList.add("carts-added","btn-dark" ,"disabled");

    }else if(cartLS.get({{ $product->id }}) === null  || cartLS.get({{ $product->id }}) == undefined){
        element.classList.add("cart-null");
         element2.classList.add("carts-null","btn-success");
    }
    }
    cartLS.onChange(cartSet());
    ;
    // cartLS.onChange(cartSet)


</script>
@endpush
@endsection
