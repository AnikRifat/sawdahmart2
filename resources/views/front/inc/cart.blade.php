<!-- sidebar-cart start -->
<div class="sidebar-cart onepage-sidebar-area">
    <div class="wrap-sidebar">
        <div class="sidebar-cart-all">
            <div class="sidebar-cart-icon">
                <button class="op-sidebar-close"><span class="ion-android-close"></span></button>
            </div>
            <div class="cart-content">
                <h3>Shopping Cart</h3>
                <h6 class="font-weight-bold"><span class="itemstotal text-success"></span> Items</h6>
                <h6 class="font-weight-bold"><span class="totali text-success"></span> <span
                      class="ml-2">{{ $content->currency }}</span></h6>
                <ul>
                    <div class="cart"></div>

                </ul>
                <li class="single-product-cart">
                    <div class="cart-checkout-btn">
                        <a class="btn-hover cart-btn-style w-100" href="{{ route('cart') }}">view cart</a>
                    </div>
                </li>
            </div>
        </div>
    </div>
</div>
