@extends('admin.layouts.app')
@section('content')
<!-- ============================================================== -->
<!-- Start Content here -->
<!-- ============================================================== -->
<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-12 col-12">
                            <h4 class="card-title">review</h4>
                        </div>
                        <div class="col-md-6 col-12">

                            <form action="{{ route('createreview') }}" method="post">
                                @csrf
                                <div class="hstack gap-3">
                                    <input class="form-control me-auto" name="name" type="text"
                                      placeholder="Add your review here...">
                                    <textarea class="form-control me-auto" name="comment" type="text"
                                      placeholder="Add your review here..."></textarea>
                                    <button type="submit" class="btn btn-secondary">Add</button>
                                </div>
                            </form>
                            {{-- <a href="{{ route('addreview') }}" class="btn btn-primary btn-sm w-md">add review</a>
                            --}}
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table align-middle mb-0">

                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Comemnt</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($reviews as $review)
                                <tr>


                                    <th>{{ $review->id }}</th>
                                    <td>{{ $review->name }}</td>
                                    <td>{{ $review->comment }}</td>
                                    <td>
                                        <form action="{{ route('deletereview', $review->id) }}" method="post">
                                            @csrf
                                            @method('Delete')
                                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                        </form>

                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- end card body -->
            </div>

        </div>
    </div>
</div>
@endsection