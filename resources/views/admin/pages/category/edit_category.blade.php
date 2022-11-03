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
                    <form action="{{ route('update.category',$category->id) }}" method="post"
                      enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="">
                            <div class="row mb-4">
                                <label for="horizontal-firstname-input" class="col-sm-3 col-form-label" for="name">
                                    Category</label>
                                <div class="col-sm-9">

                                    <input class="form-control" id="horizontal-firstname-input" name="name" type="text"
                                      placeholder="edit your Category here..." value="{{ $category->name }}">
                                </div>

                            </div>

                            <div class="row mb-4">
                                <label class="form-label" for="image">category Image</label>
                                <br>
                                <img src="{{ asset('/') }}assets/images/category/{{ $category->image }}" alt=""
                                  class="img-thumbnail mb-2" id="thm1" style=" height: 200px; width: 200px;">
                                <input class="form-control" type="file" id="image" name="image"
                                  onchange="readURL(this);">

                            </div>
                            <button type="submit" class="btn btn-secondary">Update</button>


                        </div>
                    </form>
                </div>

            </div>

        </div>
    </div>
</div>
@endsection
