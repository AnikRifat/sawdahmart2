@extends('front.layouts.app')
@section('content')
<div class="breadcrumb-area pt-205 pb-210" ">
    <div class="container">
        <div class="breadcrumb-content">
            <h2>checkout</h2>
            <ul>
                <li><a href="#">home</a></li>
                <li> checkout </li>
            </ul>
        </div>
    </div>
</div>
<!-- checkout-area start -->
<div class="checkout-area ptb-100">
    <div class="container">

        <div class="row">
            <div class="col-lg-12 col-md-12 col-12">
                <div class="your-order">
                    <h3>Your order</h3>
                    <form action="{{ route('check') }}" method="POST">
                        @csrf
                        <input type="text" class="subtotal_checkout" id="subtotal_checkout" name="subtotal" hidden>
                        <div class="your-order-table table-responsive">
                            <table>
                                <thead>
                                    <tr>
                                        <th class="product-name">Product</th>
                                        <th class="product-total">Total</th>
                                    </tr>
                                </thead>
                                <tbody class="checkout">


                                </tbody>
                                <tfoot>
                                    <tr class="order-total">
                                        <th>Order Total</th>
                                        <td><strong> <span class="subtotals"></span><span
                                                  class="ml-2">{{ $content->currency }}</span></strong>
                                        </td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                        <div class="payment-method">
                            <div class="payment-accordion">

                                <div class="order-button-payment">
                                    <input type="submit" value="Place order" />
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    const items = JSON.parse(localStorage.getItem('__cart'));
        const div = document.querySelector(".checkout");
    div.innerHTML = items.map((item) => `<tr class="cart_item">
                                    <td class="product-name">
                                        ${item.name} <strong class="product-quantity"> × ${item.quantity}</strong>
                                    </td>
                                    <input type="text" name="item_id[]" value="${item.id}" hidden>
<input type="text" name="item_name[]" value="${item.name}" hidden>
<input type="text" name="item_price[]" value="${item.price}" hidden>
<input type="text" name="item_quantity[]" value="${item.quantity}" hidden>
<input type="text" name="item_color[]" value="${item.color}" hidden>
<input type="text" name="item_size[]" value="${item.size}" hidden>

                                    <td class="product-total">
                                        <span class="amount"> ${item.price * item.quantity} <span class="ml-2">{{ $content->currency }}</span></span>
                                    </td>
                                </tr>`)



    // function checkout(){

    //     items.forEach(element => {
    //         div.innerHtml =
    //     });

    // }
</script>
@push('script')
<script>
    function subtotal(items){
document.getElementById("subtotal_checkout").value = cartLS.total()
document.querySelector(".subtotals").innerHTML = cartLS.total()
}
subtotal(cartLS.list())
cartLS.onChange(subtotal)

</script>

@endpush
<!-- checkout-area end -->
@endsection
