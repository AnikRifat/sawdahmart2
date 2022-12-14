{{-- @php
$products = $order->product;
dd($products);
@endphp --}}

{{-- @foreach ($products as $product)
{{ $order->product($product->product_id) }}

@endforeach --}}
<!-- Invoice 10 start -->
<!-- Invoice 10 end -->
@extends('front.layouts.app')
@section('content')

<!-- ============================================================== -->
<!-- Start Content here -->
<!-- ============================================================== -->
<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">
            <div class="invoice-10 invoice-content">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="invoice-inner">
                                <div class="invoice-info" id="invoice_wrapper">
                                    {{-- <div class="invoice-headar">
                                        <div class="w-100 d-flex justify-content-between">
                                            <div class="section-width">
                                                <div class="invoice-name">
                                                    <!-- logo started -->
                                                    <div class="logo">
                                                        <img class="logo"
                                                          src="{{ asset('/') }}assets/images/logo/{{ $content->logo }}"
                                    alt="logo">
                                </div>
                                <!-- logo ended -->
                            </div>
                        </div>
                        <div class="section-width">
                            <div class="invoice">
                                <h5 class="text-end">Invoice: #{{ $order->invoice }}
                                </h5>
                            </div>
                        </div>
                    </div>
                </div> --}}
                <div class="invoice-top">
                    <div class="w-100 d-flex justify-content-between">
                        {{-- <div class="section-width">
                            <div class="invoice-number">
                                <h4 class="inv-title-1">Invoice To</h4>
                                <p class="invo-addr-1">
                                    {{ $content->name }} <br />
                        {{ $content->email }} <br />
                        {{ $content->address }} <br />
                        </p>
                    </div>
                </div> --}}
                <div class="section-width">
                    <div class="invoice-number text-start">
                        <h4 class="inv-title-1">Bill To</h4>
                        <p class="invo-addr-1">
                            {{ $user->name }} <br />
                            {{ $user->email }} <br />
                            {{ $user->address , $user->city ,$user->Country }}
                            <br />
                        </p>
                    </div>
                </div>
            </div>
            <div class="w-100 d-flex justify-content-between mt-2">
                <div class="section-width">
                    <h4 class="inv-title-1">Date</h4>
                    <p class="inv-from-1">Due Date: {{ $order->date }}</p>
                </div>
                <div class="section-width text-end">
                    <h4 class="inv-title-1">Payment Method</h4>
                    <p class="inv-from-1">Cash On Delivery</p>
                </div>
            </div>
        </div>
        <div class="invoice-center">
            <div class="table-responsive">
                <table class="table table-striped invoice-table">
                    <thead class="bg-active">
                        <tr>
                            <th>Item Item</th>
                            <th class="text-center">Price</th>
                            <th class="text-center">Quantity</th>
                            <th class="text-right">Amount</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($checkout as $item)
                        <tr>
                            <td>
                                <div class="item-desc-1">
                                    <small>
                                        {{ $item->product_name }}
                                    </small>
                                </div>
                            </td>
                            <td class="text-center">
                                {{ $item->product_price }}.00 <span class="ml-2">{{ $content->currency }}</span>
                            </td>
                            <td class="text-center">{{ $item->product_quantity }}</td>
                            <td class="text-right">
                                {{ $item->product_price * $item->product_quantity }}.00 <span
                                  class="ml-2">{{ $content->currency }}</span>
                            </td>
                        </tr>

                        @endforeach

                        <tr>
                            <td colspan="3" class="text-end f-w-600">Total</td>
                            <td class="text-right f-w-600">
                                {{ $order->subtotal }}.00 <span class="ml-2">{{ $content->currency }}</span>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

    </div>
    {{-- <div class="invoice-btn-section clearfix d-print-none">
                                    <a href="javascript:window.print()" class="btn btn-lg btn-print">
                                        <i class="fa fa-print"></i> Print Invoice
                                    </a>
                                    <a id="invoice_download_btn" class="btn btn-lg btn-download">
                                        <i class="fa fa-download"></i> Download Invoice
                                    </a>
                                </div> --}}
</div>
</div>
</div>
</div>
</div>

</div>
</div>
</div>
@endsection
