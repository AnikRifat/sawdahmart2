<!-- The Modal -->
@php
// $color = DB::table('productcolors')->where('product_id', $product->product_id)->get();
$size = DB::table('productsizes')->where('product_id', $product->product_id)->get();


$color = DB::table('productcolors')
->join('colors', 'productcolors.color_id', '=', 'colors.id')
->select('colors.id','colors.name')
->get();



@endphp

<div class="modal fade" id="myModal{{ $product->id }}" tabindex="-1" role="dialog" aria-hidden="true">

    <div class="modal-dialog position-relative" role="document">
        <button type="button" class="close position-absolute" data-bs-dismiss="modal" aria-label="Close">
            <span class="ion-android-close" aria-hidden="true"></span>
        </button>
        <div class="modal-content">
            <div class="modal-body row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-12 col-12 col-lg-6">

                            <div class="quick-view-learg-img">
                                <div class="quick-view-tab-content tab-content">
                                    <div class="tab-pane active show fade" id="modal{{ $product->id }}1"
                                      role="tabpanel">
                                        <img src="{{ asset('/') }}assets/images/product/{{ $product->image }}" alt="">
                                    </div>
                                    <div class="tab-pane fade" id="modal{{ $product->id }}2" role="tabpanel">
                                        <img src="{{ asset('/') }}assets/images/product/{{ $product->image_2 }}" alt="">
                                    </div>
                                    <div class="tab-pane fade" id="modal{{ $product->id }}3" role="tabpanel">
                                        <img src="{{ asset('/') }}assets/images/product/{{ $product->image_3 }}" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="quick-view-list nav" role=tablist>
                                <a class="active" href="#modal{{ $product->id }}1" data-bs-toggle="tab" role="tab"
                                  aria-selected="true">
                                    <img src="{{ asset('/') }}assets/images/product/{{ $product->image }}" alt="">
                                </a>
                                <a href="#modal{{ $product->id }}2" data-bs-toggle="tab" role="tab"
                                  aria-selected="false">
                                    <img src="{{ asset('/') }}assets/images/product/{{ $product->image_2 }}" alt="">
                                </a>
                                <a href="#modal{{ $product->id }}3" data-bs-toggle="tab" role="tab"
                                  aria-selected="false">
                                    <img src="{{ asset('/') }}assets/images/product/{{ $product->image_3 }}" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-md-12 col-12 col-lg-6">
                            <div class="qwick-view-content">
                                <h3>{{ $product->name }}</h3>
                                <div class="price">
                                    {{ $product->price }}
                                </div>

                                <p>{!! $product->details !!}</p>
                                <div class="quick-view-select">
                                    @if($color)
                                    <div class="select-option-part">
                                        <label>Color*</label>
                                        <select class="select" name="color">
                                            <option value="">Select</option>
                                            @foreach ($colors as $item)
                                            <option value="{{ $item->id }}" style="background-color:{{ $item->name }} ">
                                            </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    @endif
                                    @if($size)
                                    <div class="select-option-part">
                                        <label>Size*</label>
                                        <select class="select" name="size">
                                            @foreach ($sizes as $item)
                                            <option value="">{{ $item->size_id }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    @endif

                                </div>
                                <div class="quickview-plus-minus">
                                    <div class="quickview-btn-cart">
                                        <a class="btn-hover-black btn-cart cart_btn{{ $product->id }}"
                                          id="cart_btn{{ $product->id }}" onclick="cartLS.add({id: {{ $product->id }}, name: '{{ $product->name }}',image:'{{
                                            $product->image }}', price: {{ $product->price }}})"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-md-12">
                    <div class="quick-view-description">
                        <div class="row">
                            <div class="col-md-12">
                                <h3>Description</h3>
                            </div>
                            <div class="col-md-12"></div>
                            {!! $product->description !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
