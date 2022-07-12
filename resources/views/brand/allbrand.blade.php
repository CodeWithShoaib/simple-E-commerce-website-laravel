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
            {{-- <th></th> --}}
          <th>ID</th>
          <th>Title</th>

        </tr>
        </thead>
        <tbody>
            @foreach ($branddata as $brand)
            <tr>
                <td>{{$brand->id}}</td>
                <td>{{$brand->title}}</td>

                    <td>
                    <a href="{{ url('deletebrand') }}/{{ $brand->id }}">Delete</a> |
                    <a href="{{ url('Editbrand') }}/{{ $brand->id }}">Edit</a>
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
