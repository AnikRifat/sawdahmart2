<div class="single-product mb-35">
    <div class="product-img">
        <a href="{{ route('product.details',$product->id) }}"><img
              src="{{ asset('/') }}assets/images/product/{{ $product->image }}" alt=""></a>
        {{-- <span>sale</span> --}}
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

        <div class="product-cart-categor">
            <div class="product-cat">
                <span>{{ $product->category->name }}</span>
            </div>
            <div class="product-categor mt-2">
                <a class="btn btn-sm btn-cart w-100 cart_btn{{ $product->id }}" id="carts_btn{{ $product->id }}"
                  href="{{ route('product.details',$product->id) }}"><i class="ion-bag me-2"></i></a>
            </div>
        </div>
    </div>
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
