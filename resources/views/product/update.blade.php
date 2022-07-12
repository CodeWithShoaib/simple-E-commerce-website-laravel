@extends('admin.adminLayout')

@section('content')
@if (Session::has('submitsuccess'))
    {{ Session::get('submitsuccess') }}
@endif
@php
    Session::forget('submitsuccess');
@endphp
<form role="form" method="post" action="{{ route('update') }}">
    @method('PUT')
    @csrf
    <div class="card-body">
      <div class="form-group">
        <label for="exampleInputEmail1">Name</label>
        <input type="text" name="name" class="form-control" value="{{ $data['name'] }}">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Price</label>
        <input type="text" name="price" class="form-control" value="{{ $data['price'] }}" >
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Brand</label>
        <select name="brand" class="form-control" >
            <option value="{{ $data['brand'] }}">{{ $data['brand'] }}</option>
            <option value="b1">Brand1</option>
            <option value="b2">Brand2</option>
            <option value="b3">Brand3</option>
            <option value="b4">Brand4</option>
        </select>
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Category</label>
        <select name="category" class="form-control">

            <option value="{{ $data['category'] }}">{{ $data['category'] }}</option>
            <option value="c1">category 1</option>
            <option value="c2">category 2</option>
            <option value="c3">category 3</option>
            <option value="c4">category 4</option>
        </select>
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Description</label>
        <input type="text" name="description" class="form-control"  placeholder="Description" value="{{ $data['description'] }}">
      </div>

    </div>
    <!-- /.card-body -->

    <div class="card-footer">
        <a href="{{ url('update')}}">
            <button type="submit" class="btn btn-primary">Update</button>
        </a>
    </div>
  </form>

@endsection
