@extends('admin.adminLayout')

@section('content')
@if (Session::has('submitsuccess'))
    {{ Session::get('submitsuccess') }}
@endif
@php
    Session::forget('submitsuccess');
@endphp
<form role="form" method="post" action="{{ route('updatebrand') }}">
    @method('PUT')
    @csrf
    <div class="card-body">
      <div class="form-group">
        <label for="exampleInputEmail1">Title</label>
        <input type="text" name="title" class="form-control" value="{{ $branddata['title'] }}">
      </div>


    </div>
    <!-- /.card-body -->

    <div class="card-footer">
        <a href="{{ url('updatebrand')}}">
            <button type="submit" class="btn btn-primary">Update</button>
        </a>
    </div>
  </form>

@endsection
