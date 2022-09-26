@extends('admin.layouts.app')

@section('content')
{{-- {{ dd($product) }} --}}
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
                        <form action="{{ route('product.update', $product->id) }}" method="POST"
                          enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="mb-4">
                                <label class="form-label" for="name">Product Name</label>
                                <input class="form-control" type="text" id="name" name="name" placeholder="product name"
                                  value="{{ $product->name }}">
                            </div>
                            <div class="mb-4">
                                <label class="form-label" for="details">Product details</label>
                                <textarea class="form-control" type="text" id="ckeditor1" name="details"
                                  placeholder="product details">{{ $product->details }}</textarea>
                            </div>
                            <div class="mb-4">
                                <label class="form-label" for="description">Product Description</label>
                                <textarea class="form-control" type="text" id="ckeditor2" name="description"
                                  placeholder="product description" value="">{{ $product->description }}</textarea>
                            </div>
                            <div class="mb-4">
                                <label class="form-label" for="price">Product price</label>
                                <input class="form-control" type="text" id="price" name="price"
                                  placeholder="product price" value="{{ $product->price }}">
                            </div>
                            <div class="mb-4">
                                <label class="form-label" for="unit">Product unit</label>
                                <input class="form-control" type="text" id="unit" name="unit" placeholder="product unit"
                                  value="{{ $product->unit }}">
                            </div>
                            <div class="mb-4">

                                <label class="form-label" for="image">Product Image 1</label>
                                <br>
                                <img src="{{ asset('/') }}assets/images/product/{{ $product->image }}" alt=""
                                  class="img-thumbnail mb-2" id="thm1" height="200" width="200">
                                <input class="form-control" type="file" id="image" name="image"
                                  onchange="readURL(this);">
                            </div>
                            <div class="mb-4">

                                <label class="form-label" for="image_2">Product Image 2</label>
                                <br>
                                <img src="{{ asset('/') }}assets/images/product/{{ $product->image_2 }}" alt=""
                                  class="img-thumbnail mb-2" id="thm2" height="200" width="200">
                                <input class="form-control" type="file" id="image_2" name="image_2"
                                  onchange="readURL2(this);">
                            </div>
                            <div class="mb-4">

                                <label class="form-label" for="image_3">Product Image 3</label>
                                <br>
                                <img src="{{ asset('/') }}assets/images/product/{{ $product->image_3 }}" alt=""
                                  class="img-thumbnail mb-2" id="thm3" height="200" width="200">
                                <input class="form-control" type="file" id="image_3" name="image_3"
                                  onchange="readURL3(this);">
                            </div>
                            <div class="mb-4">

                                <label class="form-label" for="image_4">Product Image 4</label>
                                <br>
                                <img src="{{ asset('/') }}assets/images/product/{{ $product->image_4 }}" alt=""
                                  class="img-thumbnail mb-2" id="thm4" height="200" width="200">
                                <input class="form-control" type="file" id="image_4" name="image_4"
                                  onchange="readURL4(this);">
                            </div>
                            <div class="mb-4">

                                <label class="form-label" for="image_5">Product Image 5</label>
                                <br>
                                <img src="{{ asset('/') }}assets/images/product/{{ $product->image_5 }}" alt=""
                                  class="img-thumbnail mb-2" id="thm5" height="200" width="200">
                                <input class="form-control" type="file" id="image_5" name="image_5"
                                  onchange="readURL5(this);">
                            </div>
                            <div class="mb-4">
                                <label class="form-label" for="category_id">Category Select</label>
                                <select class="form-select" id="category_id" name="category_id" onchange="genSubCat()">
                                    <option selected value="{{ $product->category?->id }}">
                                        {{ $product->category?->name }}
                                    </option>
                                    @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-4">
                                <label class="form-label" for="sub_category_id">Category Select</label>
                                <select class="form-select" id="sub_cat_id" name="sub_category_id">
                                    <option selected value="{{ $product->subcategory?->id }}">
                                        {{ $product->subcategory?->name }}
                                    </option>
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
