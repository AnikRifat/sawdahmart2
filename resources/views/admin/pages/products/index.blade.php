@extends('admin.layouts.app')
@section('content')
<!-- ============================================================== -->
<!-- Start Content here -->
<!-- ============================================================== -->
<div class="main-content">





    <div class="page-content">
        <div class="container-fluid">

            <div class="card">



                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Products</h4>
                        </div>
                        <div class="card-body">

                            <table id="datatable" class="table table-bordered dt-responsive  nowrap w-100">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>details</th>
                                        <th>price</th>
                                        <th>unit</th>
                                        <th>image</th>
                                        <th>category</th>
                                        <th>sub category</th>
                                        <th>action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($products as $item)
                                    <tr>
                                        <td>{{ $item->name }}</td>
                                        <td>{!! $item->details !!}</td>
                                        <td>{{ $item->price }}</td>
                                        <td>{{ $item->unit }}</td>
                                        <td> <img height="100"
                                              src="{{ asset('/') }}assets/images/product/{{ $item->image }}" alt="">
                                        </td>
                                        <td>{{ $item->category?->name }}</td>
                                        <td>{{ $item->subcategory?->name }}</td>
                                        <td>
                                            <form action="{{ route('product.delete', $item->id) }}"
                                              id="dltform{{ $item->id }}" method="post">
                                                @csrf
                                                @method('Delete')
                                            </form>
                                            <a href="{{ route('product.edit', $item->id) }}"
                                              class="btn btn-danger btn-sm"><i class="fas fa-edit"></i></a>
                                            <button type="button" class="btn btn-danger btn-sm"><i class="fas fa-trash"
                                                  onclick="dltItem({{ $item->id }})"></i></button>


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
    </div>
</div>
<script>
    function dltItem(x){
        Swal.fire({
		title: "Are you sure?",
		text: "You won't be able to revert this!",
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
