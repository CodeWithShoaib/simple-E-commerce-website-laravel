@extends('admin.adminLayout')

@section('content')
@if (Session::has('submitsuccess'))
    {{ Session::get('submitsuccess') }}
@endif
@php
    Session::forget('submitsuccess');
@endphp
<form role="form" method="post" action="{{ route('add') }}">
    @csrf
    <div class="card-body">
      <div class="form-group">
        <label for="exampleInputEmail1">Name</label>
        <input type="text" name="name" class="form-control"  >
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Price</label>
        <input type="text" name="price" class="form-control"  >
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Brand</label>
        <select name="brand" class="form-control">
            @php
                $brands=\Illuminate\Support\Facades\DB::table('brands')->get();
                @endphp
                @foreach ($brands as $brand)

                <option value="{{ $brand->title }}">{{ $brand->title }}</option>
                @endforeach

        </select>
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Category</label>
        <select name="category" class="form-control">

            @php
                $category=\Illuminate\Support\Facades\DB::table('categories')->get();
                @endphp
                @foreach ($category as $item)

                <option value="{{ $item->title }}">{{ $item->title }}</option>
                @endforeach
        </select>
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Description</label>
        <input type="text" name="description" class="form-control"  placeholder="Description">
      </div>

    </div>
    <!-- /.card-body -->

    <div class="card-footer">
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
  </form>

@endsection
