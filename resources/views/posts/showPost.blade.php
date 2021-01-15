@extends('admin-layout.master')
@section('title', 'detaiil')
@section('ten', "detail $post->desc")

@section('content')
    <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">desc</th>
      <th scope="col" class="huy1">content</th>
      <th scope="col">image_url</th>
      <th scope="col">student_id</th>
      <th scope="col">status</th>
    </tr>
  </thead>
  <tbody>
                    <tr>
                    <td>{{ $post->desc }}</td>
                    <td class="huy1" >{{ $post->content }}</td>
                    <td>{{ $post->image_url }} </td>
                    <td>{{ $post->student_id }} </td>
                    <td>{{ $post->status == 1 ? 'Yes' : 'No' }}</td>
                    
                </tr>
        </tbody>

</table>
    
    @endsection