<!-- The Modal -->

<div class="modal fade" id="myModal{{ $product->id }}" tabindex="-1" role="dialog" aria-hidden="true">
    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
        <span class="ion-android-close" aria-hidden="true"></span>
    </button>
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="qwick-view-left">
                    <div class="quick-view-learg-img">
                        <div class="quick-view-tab-content tab-content">
                            <div class="tab-pane active show fade" id="modal1" role="tabpanel">
                                <img src="{{ asset('/') }}assets/images/product/{{ $product->image }}" alt="">
                            </div>
                            <div class="tab-pane fade" id="modal2" role="tabpanel">
                                <img src="{{ asset('/') }}assets/images/product/{{ $product->image_2 }}" alt="">
                            </div>
                            <div class="tab-pane fade" id="modal3" role="tabpanel">
                                <img src="{{ asset('/') }}assets/images/product/{{ $product->image_3 }}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="quick-view-list nav" role=tablist>
                        <a class="active" href="#modal1" data-bs-toggle="tab" role="tab" aria-selected="true">
                            <img src="{{ asset('/') }}assets/images/product/{{ $product->image }}" alt="">
                        </a>
                        <a href="#modal2" data-bs-toggle="tab" role="tab" aria-selected="false">
                            <img src="{{ asset('/') }}assets/images/product/{{ $product->image_2 }}" alt="">
                        </a>
                        <a href="#modal3" data-bs-toggle="tab" role="tab" aria-selected="false">
                            <img src="{{ asset('/') }}assets/images/product/{{ $product->image_3 }}" alt="">
                        </a>
                    </div>
                </div>
                <div class="qwick-view-right">
                    <div class="qwick-view-content">
                        <h3>{{ $product->name }}</h3>
                        <div class="price">
                            {{ $product->price }}
                        </div>

                        <p>{!! $product->details !!}</p>

                        <div class="quickview-plus-minus">
                            <div class="cart-plus-minus">
                                <input type="text" value="02" name="qtybutton" class="cart-plus-minus-box">
                            </div>
                            <div class="quickview-btn-cart">
                                <a class="btn-hover-black" href="#">add to cart</a>
                            </div>
                            <div class="quickview-btn-wishlist">
                                <a class="btn-hover" href="#"><i class="ion-ios-heart-outline"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
