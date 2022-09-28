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
                            <h4 class="card-title">Category</h4>
                        </div>
                        <div class="col-md-6 col-12">

                            <form action="{{ route('slider.store') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="hstack gap-3">
                                    <div class="mb-2">

                                        <label class="form-label" for="image">Slider Image</label>
                                        <br>
                                        <img src="{{ asset('/') }}assets/admin/images/thumb.png" alt=""
                                          class="img-thumbnail mb-2" id="thm1" height="200" width="200">
                                        <input class="form-control" type="file" id="image" name="image"
                                          onchange="readURL(this);">
                                    </div>
                                    <button type="submit" class="btn btn-secondary">Add</button>
                                </div>
                            </form>
                            {{-- <a href="{{ route('addcategory') }}" class="btn btn-primary btn-sm w-md">add
                            category</a> --}}
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table align-middle mb-0">

                            <thead>
                                <tr>
                                    <th>Image</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($sliders as $item)
                                <tr>

                                    <td>
                                        <img src="{{ asset('/') }}assets/images/slider/{{ $item->image }}" width="300"
                                          alt="">

                                    </td>
                                    <td class="d-flex justify-content-around">

                                        <form action="{{ route('slider.delete', $item->id) }}"
                                          id="dltform{{ $item->id }}" method="post">
                                            @csrf
                                            @method('Delete')
                                        </form>
                                        <button type="button" class="btn btn-danger btn-sm"><i class="fas fa-trash"
                                              onclick="dltItem({{ $item->id }})"></i></button>
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
<script>
    function dltItem(x){
        Swal.fire({
		title: "Are you sure?",
		text: "If you delete this category, every products & subcategories under this category will be deleted!",
		icon: "warning",
		showCancelButton: !0,
		confirmButtonColor: "#fd625e",
		cancelButtonColor: " #2ab57d",
		confirmButtonText: "Yes, delete it!"
	}).then(function(e) {
        if (e.isConfirmed) {
            let id = "dltform"+x;
        // console.log(id);
        document.getElementById(id).submit();

  }
	})

    }


</script>
@endsection
