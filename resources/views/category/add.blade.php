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
        <label for="exampleInputEmail1">Title</label>
        <input type="text" name="title" class="form-control"  >
      </div>


    </div>
    <!-- /.card-body -->

    <div class="card-footer">
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
  </form>

@endsection
