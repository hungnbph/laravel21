@extends('admin-layout.master')
@section('title', 'detail categories')

@section('ten', ' deatil categories')

@section('content')
    <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">stt</th>
      <th scope="col">Name</th>
      <th scope="col">parent_id</th>
      <th scope="col">status</th>
      
      
    </tr>
  </thead>
  <tbody>
                <tr>
                     <td>{{ $category->id }}</td>
                    <td>{{ $category->name }}</td>
                    <td>{{ $category->parent_id }}</td>
                    <td>
                        @if ($category->status == 1)
                            đang trong sử dụng
                        @else
                            danh mục đang tạm ngừng hoạt động
                        @endif
                    </td>
                </tr>
        </tbody>

</table>

    
    @endsection