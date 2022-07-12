@extends('admin.adminLayout')

@section('content')
<!-- /.card -->

<div class="card">
    <div class="card-header">
      <h3 class="card-title">DataTable with default features</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
        <tr>
          <th>Name</th>
          <th>Price</th>
          <th>Brand</th>
          <th>Category</th>
          <th>Description</th>
          <th>Delete</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($data as $product)
            <tr>
                <td>{{$product->name}}</td>
                <td>{{$product->price}}</td>
                <td>{{$product->brand}}</td>
                <td>{{$product->category}}</td>
                <td>{{$product->description}}</td>
                <td>
                    <a href="{{ url('delete') }}/{{ $product->id }}">Delete</a> |
                    <a href="{{ url('Edit') }}/{{ $product->id }}">Edit</a>
                </td>

              </tr>

            @endforeach


        </tbody>

      </table>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
@endsection
