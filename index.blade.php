
@extends('employee.master')
@section('content')
  <div class="container">
    <table class="table table-bordered">
    <thead>
      <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Gender</th>
        <th>Phone</th>
        <th>Address</th>
        <th colspan="3">Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach($employee as $post)
      <tr>
        <td>{{$post['id']}}</td>
        <td>{{$post['Name']}}</td>
        <td>{{$post['Gender']}}</td>
        <td>{{$post['Phone']}}</td>
        <td>{{$post['Address']}}</td>
        <td><a href="{{action('EmpController@show', $post['id'])}}" class="btn btn-primary">Show</a></td>
        <td><a href="{{action('EmpController@edit', $post['id'])}}" class="btn btn-warning">Edit</a></td>
        <td>
          <form action="{{action('EmpController@destroy', $post['id'])}}" method="get">
          <button class="btn btn-danger" type="submit">Delete</button>
          </form>
        
      </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  </div>
@endsection
