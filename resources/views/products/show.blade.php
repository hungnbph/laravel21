@extends('admin-layout.master')
@section('title', 'title list')

@section('ten', ' list product')

@section('content')
    <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">content</th>
      <th scope="col">user_id</th>
      <th scope="col">product_id</th>
      <th scope="col">status</th>
    </tr>
  </thead>
  <tbody>
             @foreach($comments as $cm)
             <tr>
             
             <td>{{$cm->content}}</td>
             @if(isset($cm->user->name))
                    <td>{{$cm->user->name}}</td>
             @else
             <td>null</td>
             @endif
             
               <td>{{$product->name}}</td>
                    
               <td>@if ($cm->status == 1)
                            hiện
                        @else
                            ẩn
                        @endif</td> 
                
                </tr>
                @endforeach
        </tbody>

</table>

    
    @endsection 