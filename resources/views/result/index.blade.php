@extends('layouts.master')
@section('content')
      
      <h2>Studnents Result</h2> 
      <table class="table table-bordered">
        <tr>
          <th>Student ID</th>
          <th>Name</th>
          <th>Batch</th>
          <th>Exam Month</th>
          <th>Marks MCQ</th>
          <th>Marks Evidence</th>
          <th>Total</th>
          <th>Result</th>
          <th>Action</th>
        </tr>
        @foreach($results as $result)
        <tr>
          <td>{{$result->id}}</td>
          <td>{{$result->student->name}}</td>
          <td>{{$result->student->batch_id}}</td>
          <td>{{$result->exammonth}}</td>
          <td>{{$result->marks_mcq}}</td>
          <td>{{$result->marks_evi}}</td>
          <td>{{$result->marks_mcq + $result->marks_evi}}</td>
          <td>{{$result->result}}</td>
          <td>Edit | Delete</td>
        </tr>
        @endforeach
      </table>
@endsection      
     
    
