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

                            <form action="{{ route('createcategory') }}" method="post">
                                @csrf
                                <div class="hstack gap-3">
                                    <input class="form-control me-auto" name="name" type="text"
                                      placeholder="Add your Category here...">
                                    <div class="mb-4">

                                        <label class="form-label" for="image">Image</label>
                                        <br>
                                        <img src="{{ asset('/') }}assets/admin/images/thumb.png" alt=""
                                          class="img-thumbnail mb-2" id="thm1" style=" height: 200px; width: 200px;">
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
                                    <th>Name</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($categories as $category)
                                <tr>

                                    <td>{{ $category->name }}</td>
                                    <td class="d-flex justify-content-around">
                                        <a href="{{ route('edit.category',$category->id) }}"
                                          class="btn btn-info btn-sm"><i class="fas fa-edit"></i></a>
                                        <form action="{{ route('deleteCategory', $category->id) }}"
                                          id="dltform{{ $category->id }}" method="post">
                                            @csrf
                                            @method('Delete')
                                        </form>
                                        <button type="button" class="btn btn-danger btn-sm"><i class="fas fa-trash"
                                              onclick="dltItem({{ $category->id }})"></i></button>
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
