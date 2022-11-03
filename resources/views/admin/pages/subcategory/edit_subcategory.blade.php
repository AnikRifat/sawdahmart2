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
                    <form action="{{ route('update.subcategory',$subcategory->id) }}" method="post"
                      enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="">
                            <div class="row mb-4">
                                <label for="horizontal-firstname-input" class="col-sm-3 col-form-label" for="name">Sub
                                    Category</label>
                                <div class="col-sm-9">

                                    <input class="form-control" id="horizontal-firstname-input" name="name" type="text"
                                      placeholder="edit your Sub Category here..." value="{{ $subcategory->name }}">
                                </div>

                            </div>
                            <div class="row mb-4">
                                <label class="form-label" for="image">subcategory Image 1</label>
                                <br>
                                <img src="{{ asset('/') }}assets/images/subcategory/{{ $subcategory->image }}" alt=""
                                  class="img-thumbnail mb-2" id="thm1" style=" height: 200px; width: 200px;">
                                <input class="form-control" type="file" id="image" name="image"
                                  onchange="readURL(this);">

                            </div>
                            <div class="row mb-4">
                                <label for="horizontal-firstname-input" class="col-sm-3 col-form-label"
                                  for="category_id">Category</label>
                                <div class="col-sm-9">
                                    <select class="form-select" id="category_id" name="category_id">
                                        @foreach ($categories as $category)
                                        <option value="{{ $category->id }}" @if($category->id ==
                                            $subcategory->category_id)
                                            selected
                                            @endif

                                            >{{ $category->name }}</option>
                                        @endforeach
                                    </select>
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
