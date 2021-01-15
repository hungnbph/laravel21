@extends('admin-layout.master')
@section('title', 'detail')
@section('ten', "detail comment")

@section('content')
    <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">student</th>
      <th scope="col" >post</th>
      <th scope="col">content</th>
    </tr>
  </thead>
  <tbody>
                    <tr>
                    <td>{{ $comment->student_id }}</td>
                    <td >{{ $comment->post_id }}</td>
                    <td>{{ $comment ->content }} </td>
                    
                </tr>
                
        </tbody>

</table>
     @endsection
