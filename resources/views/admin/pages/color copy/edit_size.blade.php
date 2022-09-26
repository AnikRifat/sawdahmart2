@extends('admin.layouts.app')
@section('content')
<!-- ============================================================== -->
<!-- Start Content here -->
<!-- ============================================================== -->
<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">
            <div class="card">
                <div class="container">
                    <form action="{{ route('update.size',$size->id) }}" method="post">
                        @csrf
                        @method('put')
                        <div class="">
                            <div class="row mb-4">
                                <label for="horizontal-firstname-input" class="col-sm-3 col-form-label" for="name">
                                    size</label>
                                <div class="col-sm-9">

                                    <input class="form-control" id="horizontal-firstname-input" name="name" type="text"
                                      placeholder="edit your size here..." value="{{ $size->name }}">
                                </div>

                            </div>

                            <div class="row mb-4">

                                <button type="submit" class="btn btn-secondary">Update</button>
                            </div>



                        </div>
                    </form>
                </div>

            </div>

        </div>
    </div>
</div>
@endsection
