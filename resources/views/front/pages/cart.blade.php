@extends('front.layouts.app')
<style>
    .qty .count {
        color: #000;
        display: inline-block;
        vertical-align: top;
        font-size: 25px;
        font-weight: 700;
        line-height: 30px;
        padding: 0 2px;
        min-width: 35px;
        text-align: center;
    }

    .qty .plus {
        cursor: pointer;
        display: inline-block;
        vertical-align: top;
        color: white;
        width: 30px;
        height: 30px;
        font: 30px/1 Arial, sans-serif;
        text-align: center;
        margin-top: 5px;
        border-radius: 50%;
    }

    .qty .minus {
        cursor: pointer;
        display: inline-block;
        vertical-align: top;
        color: white;
        width: 30px;
        height: 30px;
        font: 30px/1 Arial, sans-serif;
        text-align: center;
        margin-top: 5px;

        border-radius: 50%;
        background-clip: padding-box;
    }
</style>
@section('content')
<div class="breadcrumb-area pt-205 pb-210"
  style="background-image: url({{ asset('/') }}assets/images/{{ $content->tvc2 }}">
    <div class="container">
        <div class="breadcrumb-content">
            <h2>cart page</h2>
            <ul>
                <li><a href="#">home</a></li>
                <li> cart </li>
            </ul>
        </div>
    </div>
</div>
<!-- shopping-cart-area start -->
<div class="cart-main-area pt-95 pb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <h1 class="cart-heading">Cart</h1>
                <form action="#">
                    <div class="table-content table-responsive">
                        <table>
                            <thead>
                                <tr>
                                    <th class="product-name">remove</th>
                                    <th class="product-price">images</th>
                                    <th class="product-name">Product</th>
                                    <th class="product-price">Price</th>
                                    <th class="product-quantity">Quantity</th>
                                    <th class="product-subtotal">Total</th>
                                </tr>
                            </thead>
                            <tbody class="cartcheck">


                            </tbody>
                        </table>
                    </div>
                    {{-- <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="coupon-all">
                                <div class="coupon">
                                    <input id="coupon_code" class="input-text" name="coupon_code" value=""
                                      placeholder="Coupon code" type="text">
                                    <input class="button" name="apply_coupon" value="Apply coupon" type="submit">
                                </div>
                                <div class="coupon2">
                                    <input class="button" name="update_cart" value="Update cart" type="submit">
                                </div>
                            </div>
                        </div>
                    </div> --}}
                    <div class="row">
                        <div class="col-md-5 ms-auto">
                            <div class="cart-page-total">
                                <h2>Cart totals</h2>
                                <ul>
                                    <li>Total <span class="total"></span></li>
                                </ul>
                                <a href="{{ route('checkout') }}">Proceed to checkout</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@push('script')
<script>
    function renderCheckout(items) {
const $cartcheck = document.querySelector(".cartcheck")

$cartcheck.innerHTML = items.map((item) => `
<tr>
                                    <td class="product-remove"><button class="btn" onClick="cartLS.remove(${item.id})" ><i class="ion-android-close"></i></button></td>
                                    <td class="product-thumbnail">
                                        <a href="#"><img src="{{ asset('/') }}assets/images/product/${item.image}" alt="${item.name}"></a>
                                    </td>
                                    <td class="product-name"><a href="#">${item.name} </a></td>
                                    <td class="product-price"><span class="amount"> ${item.price}<span class="ml-2">{{ $content->currency }}</span></span></td>
                                    <td class="qty mt-5">
                        <span onClick="cartLS.quantity(${item.id},-1)" class="minus bg-dark">-</span>
                        <input type="number" class="count" name="qty" value="${item.quantity}">
                        <span onClick="cartLS.quantity(${item.id},1)" class="plus bg-dark">+</span>
                    </td>
                                    <td class="product-subtotal"> ${item.price * item.quantity} <span class="ml-2">{{ $content->currency }}</span><span class="ml-2"></span></td>

                                </tr>


`)

document.querySelector(".total").innerHTML =  cartLS.total() + "{{ $content->currency }}"

//  console.log(cartLS.total());
}
renderCheckout(cartLS.list())
cartLS.onChange(renderCheckout)
</script>
@endpush
<!-- shopping-cart-area end -->
@endsection
