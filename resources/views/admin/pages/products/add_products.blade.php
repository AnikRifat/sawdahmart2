@extends('admin.layouts.app')
@section('content')
@php
$productID = '#product'. rand(100,1000)
@endphp
<!-- ============================================================== -->
<!-- Start Content here -->
<!-- ============================================================== -->
<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">

            <div class="card">
                <div class="card-body">
                    <div>
                        <h5 class="card-title mb-4">Products</h5>
                        <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf




                            <div class="mb-4">
                                <label class="form-label" for="product_id">Product ID</label>
                                <input class="form-control" type="text" id="product_id" name="product_id"
                                  placeholder="product ID" value="{{ $productID }}" readonly>
                            </div>
                            <div class="mb-4">
                                <label class="form-label" for="name">Product Name</label>
                                <input class="form-control" type="text" id="name" name="name" placeholder="product name"
                                  value="">
                            </div>
                            <div class="mb-4">
                                <label class="form-label" for="details">Product quick view</label>
                                <textarea class="form-control" type="text" id="ckeditor1" name="details"
                                  placeholder="product qwick view" value=""></textarea>
                            </div>
                            <div class="mb-4">
                                <label class="form-label" for="description">Product Description</label>
                                <textarea class="form-control" type="text" id="ckeditor2" name="description"
                                  placeholder="product description" value=""></textarea>
                            </div>

                            <div class="mb-4">
                                <label class="form-label" for="price">Product price</label>
                                <input class="form-control" type="text" id="price" name="price"
                                  placeholder="product price" value="">
                            </div>
                            <div class="mb-4">
                                <label class="form-label" for="unit">Product unit</label>
                                <input class="form-control" type="text" id="unit" name="unit" placeholder="product unit"
                                  value="">
                            </div>
                            <div class="mb-4">

                                <label class="form-label" for="image">Product Image 1</label>
                                <br>
                                <img src="{{ asset('/') }}assets/admin/images/thumb.png" alt=""
                                  class="img-thumbnail mb-2" id="thm1" height="200" width="200">
                                <input class="form-control" type="file" id="image" name="image"
                                  onchange="readURL(this);">
                            </div>
                            <div class="mb-4">

                                <label class="form-label" for="image_2">Product Image 2</label>
                                <br>
                                <img src="{{ asset('/') }}assets/admin/images/thumb.png" alt=""
                                  class="img-thumbnail mb-2" id="thm2" height="200" width="200">
                                <input class="form-control" type="file" id="image_2" name="image_2"
                                  onchange="readURL2(this);">
                            </div>
                            <div class="mb-4">

                                <label class="form-label" for="image_3">Product Image 3</label>
                                <br>
                                <img src="{{ asset('/') }}assets/admin/images/thumb.png" alt=""
                                  class="img-thumbnail mb-2" id="thm3" height="200" width="200">
                                <input class="form-control" type="file" id="image_3" name="image_3"
                                  onchange="readURL3(this);">
                            </div>
                            <div class="mb-4">
                                <label class="form-label" for="color">Select colors:</label>
                                <select id="color" class="-select" name="color" multiple>
                                    @foreach ($colors as $color)
                                    <option value="{{ $color->id }}">
                                        {{ $color->name }}
                                    </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-4">
                                <label class="form-label" for="size">Select sizes:</label>
                                <select id="size" class="-select" name="size" multiple>
                                    @foreach ($sizes as $size)
                                    <option value="{{ $size->id }}">{{ $size->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-4">
                                <label class="form-label" for="category_id">Category Select</label>
                                <select class="form-select" id="category_id" name="category_id" onchange="genSubCat()">
                                    <option>Select</option>
                                    @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-4">
                                <label class="form-label" for="sub_category_id">Sub Category Select</label>
                                <select class="form-select" id="sub_cat_id" name="sub_category_id">
                                </select>
                            </div>
                            <div class="mt-4">
                                <button type="submit" class="btn btn-primary w-md">Submit</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>

</div>


@endsection
{{-- ((res => {
    field.innerHTML = `
    <option value="${res.id}">${res.name}</option>
    `;
    //  += $content;
    // console.log($content); --}}
