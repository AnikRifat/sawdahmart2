@extends('admin.layouts.app')
@section('content')
<!-- ============================================================== -->
<!-- Start Content here -->
<!-- ============================================================== -->
@foreach ($orders as $item)
@include('admin.inc.order_modal')
@endforeach
<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Canceled Order</h4>
                    </p>
                </div>
                <div class="card-body">

                    <table id="datatable-buttons" class="table table-bordered dt-responsive nowrap w-100">
                        <thead>
                            <tr>
                                <th>Sl no.</th>
                                <th>Track ID</th>
                                <th>User ID</th>
                                <th>subtotal</th>
                                <th>status</th>
                                <th>Date</th>
                                <th>Time</th>
                                <th>Action</th>
                            </tr>
                        </thead>


                        <tbody>
                            @foreach ($orders as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->track_id }}</td>
                                <td>{{ $item->user_id }}</td>
                                <td>{{ $item->subtotal }}</td>

                                @if($item->status == 1)
                                <td class="bg-success text-light">
                                    accepted
                                </td>
                                @endif
                                @if($item->status == 2)
                                <td class="bg-danger text-light">
                                    Canceled
                                </td>
                                @endif
                                @if($item->status == 0)
                                <td class="bg-info text-light">
                                    Pending
                                </td>
                                @endif
                                </td>
                                <td>{{ $item->date }}</td>
                                <td>{{ $item->time }}</td>
                                <td>

                                    <button type="button" class="btn btn-primary waves-effect waves-light"
                                      data-bs-toggle="modal" data-bs-target="#order{{ $item->id }}">view</button>
                                </td>
                            </tr>
                            @endforeach


                        </tbody>
                    </table>

                </div>
            </div>

        </div>
    </div>
</div>
@endsection
