@extends('layouts.master')
@section('content')
      <table class="table table-bordered">
        <tr>
          <th>ID</th>
          <th>Name</th>
          <th>Batch</th>
          <th>Phone</th>
          <th>Address</th>
          <th>Action</th>
        </tr>
        @foreach($students as $student)
        <tr>
          <td>{{$student->id}}</td>
          <td>{{$student->name}}</td>
          <td>{{$student->batch_id}}</td>
          <td>{{$student->phone}}</td>
          <td>{{$student->address}}</td>
          <td><img src="{{asset($student->photo)}}" alt="" height="50px"></td>
          <td>Edit | Delete <a href="{{route('result.show', $student->id)}}" class="btn btn-success">Result</a></td>
        </tr>
        @endforeach
      </table>
      <a class="btn btn-info" href="{{route('student.create')}}">New Student</a>
@endsection