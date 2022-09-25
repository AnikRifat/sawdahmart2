<div class="single-product mb-35">
    <div class="product-img">
        <a href="#"><img src="{{ asset('/') }}assets/images/product/{{ $product->image }}" alt=""></a>
        <span>sale</span>
        <div class="product-action">
            <a title="Wishlist" class="animate-left" onclick="cartLS.add({id: {{ $product->id }}, name: '{{ $product->name }}',image:'{{
                $product->image }}', price: {{ $product->price }}})"><i class="ion-bag"></i></a>
            <a title="Quick View" data-bs-toggle="modal" data-bs-target="#myModal{{ $product->id }}"
              class="animate-right" href="#"><i class="ion-ios-eye-outline"></i></a>
        </div>
    </div>
    <div class="product-content">
        <div class="product-title-price">
            <div class="product-title">
                <h4>{{ $product->name }}</h4>
            </div>
            <div class="product-price">
                <span>BDT {{ $product->price }}</span>
            </div>
        </div>
        <div class="product-cart-categori">
            <div class="product-cart">
                <span>{{ $product->category->name }}</span>
            </div>
            <div class="product-categori">
                <a class="cart_btn{{ $product->id }}" href="#" onclick="cartLS.add({id: {{ $product->id }}, name: '{{ $product->name }}',image:'{{
                    $product->image }}', price: {{ $product->price }}})"><i class="ion-bag"></i> Add to cart</a>
            </div>
        </div>
    </div>
</div>
