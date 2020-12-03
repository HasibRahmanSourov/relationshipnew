@extends('layouts.master')
@section('content')
    
<div class="well">
  <p>ID: {{$student->id}}</p>
  <p>Name: {{$student->name}}</p>
  <p>Phone: {{$student->phone}}</p>
  <p>Address: {{$student->address}}</p>
  <p>Batch ID: {{$student->batch_id}}</p>
</div>

<h2>All results</h2>
    <table class="table table-bordered">
        <tr>
          <th>Exam Month</th>
          <th>MCQ</th>
          <th>Evidence</th>
          <th>Total</th>
          <th>Result</th>
          <th>Action</th>
        </tr>
        @foreach($student->result as $res)        
        <tr>
          <th>{{$res->exammonth}}</th>
          <th>{{$res->marks_mcq}}</th>
          <th>{{$res->marks_evi}}</th>
          <th>{{$res->marks_mcq + $res->marks_evi}}</th>
          <th>{{$res->result}}</th>
          <th>Action</th>
        </tr>
        @endforeach
      </table>
@endsection