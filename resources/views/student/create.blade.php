@extends('layouts.master')
@section('content')
<h2>Student Entry Form</h2>
<form class="form-horizontal" action="{{route('student.store')}}" method="post" enctype="multipart/form-data">
@csrf
@include('layouts.message')
  <div class="form-group">
    <label class="control-label col-sm-4" for="name">Students Name:</label>
    <div class="col-sm-8">
      <input type="text" class="form-control"  name='fullname' id="name" placeholder="Enter Name">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-4" for="batch">Batch ID:</label>
    <div class="col-sm-8">
      <input type="text" class="form-control"  name='batch' id="name" placeholder="Enter batch">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-4" for="phone">Phone:</label>
    <div class="col-sm-8">
      <input type="text" class="form-control"  name='phone' id="name" placeholder="Enter phone">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-4" for="address">Address:</label>
    <div class="col-sm-8">
      <textarea class="form-control" name="address" id="address" cols="30" rows="10"></textarea>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-4" for="district">District:</label>
    <div class="col-sm-8">
      <select name="district" id="" class="form-control">
        <option value="" disable>Select one</option>
        @foreach($districts as $dist)
        <option value="{{$dist->id}}">{{$dist->dist_name}}</option>
        @endforeach
      </select>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-4" for="photo">Photo:</label>
    <div class="col-sm-8">
      <input type="file" class="form-control" name="photo" id="name" placeholder="Enter Name">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">Submit</button>
    </div>
  </div>
</form> 
@endsection