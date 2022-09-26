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
                            <h4 class="card-title">size</h4>
                        </div>
                        <div class="col-md-6 col-12">

                            <form action="{{ route('createsize') }}" method="post">
                                @csrf
                                <div class="hstack gap-3">
                                    <input class="form-control me-auto" name="name" type="text"
                                      placeholder="Add your size here...">
                                    <button type="submit" class="btn btn-secondary">Add</button>
                                </div>
                            </form>
                            {{-- <a href="{{ route('addsize') }}" class="btn btn-primary btn-sm w-md">add
                            size</a> --}}
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
                                @foreach ($sizes as $item)
                                <tr>

                                    <td>{{ $item->name }}</td>
                                    <td class="d-flex justify-content-around">
                                        <a href="{{ route('edit.size',$item->id) }}" class="btn btn-info btn-sm"><i
                                              class="fas fa-edit"></i></a>
                                        <form action="{{ route('deletesize', $item->id) }}" id="dltform{{ $item->id }}"
                                          method="post">
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
		text: "If you delete this size, every products & subcategories under this size will be deleted!",
		icon: "warning",
		showCancelButton: !0,
		confirmButtonsize: "#fd625e",
		cancelButtonsize: " #2ab57d",
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
