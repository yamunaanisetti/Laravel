
@extends('employee.master')
@section('content')
  <div class="container">
    <table class="table table-striped">
    <thead>
      <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Gender</th>
        <th>Phone</th>
        <th>Address</th>
      </tr>
    </thead>
    <tbody>
     <tr>
        <td>{{ $employee->id}}</td>
        <td>{{ $employee->Name}}</td>
        <td>{{ $employee->Gender}}</td>
        <td>{{ $employee->Phone}}</td>
        <td>{{ $employee->Address}}</td>
     </tr>
    </tbody>
  </table>
  </div>
@endsection
