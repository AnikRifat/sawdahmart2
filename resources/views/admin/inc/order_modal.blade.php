@php
$products = $item->product_id($item->track_id);
@endphp
<!-- sample modal content -->
<div id="order{{ $item->id }}" class="modal fade" tabindex="-1" aria-labelledby="exampleModalFullscreenLabel"
  aria-hidden="true">
    <div class="modal-dialog modal-fullscreen">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalFullscreenLabel">Track ID: {{ $item->track_id }}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <div class="invoice-10 invoice-content">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="invoice-inner" id="invoice{{ $item->id }}">
                                        <html>

                                            <head>
                                                <title>title</title>
                                            </head>

                                            <body>
                                                <div class="invoice-info" id="invoice_wrapper">
                                                    <div class="invoice-headar">
                                                        <div class="row">
                                                            <div class="col-sm-6">
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
                                                            <div class="col-sm-6">
                                                                <div class="invoice">
                                                                    <h5 class="text-end">Invoice: #{{ $item->invoice }}
                                                                    </h5>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="invoice-top">
                                                        <div class="row">
                                                            <div class="col-sm-6">
                                                                <div class="invoice-number">
                                                                    <h4 class="inv-title-1">Invoice To</h4>
                                                                    <p class="invo-addr-1">
                                                                        {{ $content->name }} <br />
                                                                        {{ $content->email }} <br />
                                                                        {{ $content->address }} <br />
                                                                    </p>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <div class="invoice-number text-end">
                                                                    <h4 class="inv-title-1">Bill To</h4>
                                                                    <p class="invo-addr-1">
                                                                        {{ $item->user->name }} <br />
                                                                        {{ $item->user->email }} <br />
                                                                        {{ $item->user->address , $item->user->city ,$item->user->Country }}
                                                                        <br />
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row mt-2">
                                                            <div class="col-sm-6">
                                                                <h4 class="inv-title-1">Date</h4>
                                                                <p class="inv-from-1">Due Date: {{ $item->date }}</p>
                                                            </div>
                                                            <div class="col-sm-6 text-end">
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
                                                                    @foreach ($products as $product)
                                                                    <tr>
                                                                        <td>
                                                                            <div class="item-desc-1">
                                                                                <small>
                                                                                    {{ $product->product_name }}
                                                                                </small>
                                                                            </div>
                                                                        </td>
                                                                        <td class="text-center">BDT
                                                                            {{ $product->product_price }}.00
                                                                        </td>
                                                                        <td class="text-center">
                                                                            {{ $product->product_quantity }}
                                                                        </td>
                                                                        <td class="text-right">BDT
                                                                            {{ $product->product_price * $product->product_quantity }}.00
                                                                        </td>
                                                                    </tr>

                                                                    @endforeach

                                                                    <tr>
                                                                        <td colspan="3" class="text-end f-w-600">Total
                                                                        </td>
                                                                        <td class="text-right f-w-600">BDT
                                                                            {{ $item->subtotal }}.00
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>

                                                </div>
                                            </body>

                                        </html>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary waves-effect" data-bs-dismiss="modal">Close</button>
                <a type="button" href="{{ route('order.edit',$item->id) }}"
                  class="btn btn-primary waves-effect waves-light">Print</a>
                {{-- @csrf --}}
                @if($item->status == 0)
                <a href="{{ route('order.accept',$item->id) }}"
                  class="btn btn-success waves-effect waves-light">accept</a>

                <a href="{{ route('order.cancel',$item->id) }}"
                  class="btn btn-danger waves-effect waves-light">cancel</a>
                @endif

            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
