@extends('admin-layout.master')
@section('title', 'title list')

@section('ten', ' list categories')

@section('content')
    <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col"> stt</th>
      <th scope="col" >Name</th>
      <th scope="col">parent_id</th>
      <th scope="col">status</th>
      <th scope="col">Detail</th>
      <th scope="col">action</th>
      
    </tr>
  </thead>
  <tbody>
            @foreach($categories as $category)
                <tr>
                     <td> {{ $category->id}} </td>
                    <td>{{ $category->name }}</td>
                    @if(isset($category->category->name))
                    <td>{{$category->category->name}}</td>
                    @else
                            <td >danh mục gốc</td>
                    @endif
                    <td>
                        @if ($category->status == 1)
                            hiện
                        @else
                            ẩn
                        @endif
                    </td>
                    <td><button class="btn btn-warning" > <a href="{{ route('categories.show', $category->id) }}" > detail</a></button></td>
                    <td><form
                      action="{{ route('categories.destroy', $category->id) }}"
                      method="POST"
                    >
                      @csrf
                      <input type='hidden' name='_method' value='DELETE'></input>
                      <button class="btn btn-danger" onclick=" return confirm('bạn có chắc chắn không?')" type='submit'>Delete</button>
                    </form>
                    <a href="{{ route('categories.edit', $category->id) }}">
                      <button class="btn btn-info" >Edit</button>
                    </a></td>
                </tr>
            @endforeach
        </tbody>
          <tr><td colspan="7">{{$categories->links()}}</td></tr>

</table>

    
    @endsection

    