@extends('admin-layout.master')
@section('title', 'title list')

@section('ten', ' list comment')

@section('content')
    <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">content</th>
      <th scope="col" >user</th>
      <th scope="col">product</th>
      <th scope="col">status</th>
      <th scope="col">action</th>
    </tr>
  </thead>
  <tbody>
            @foreach($comments as $comment)
                <tr>
                    <td>{{ $comment->content }}</td>
                    @if(isset($comment->user->name))
                    <td>{{$comment->user->name}}</td>
                    @else
                    <td>null</td>
                    @endif
                    @if(isset($comment->product->name))
                    <td>{{$comment->product->name}}</td>
                    @else
                    <td>null</td>
                    @endif
                    
                    <td>@if ($comment->status == 1)
                            hiện
                        @else
                           ẩn
                        @endif</td>
                    <td><form
                      action="{{ route('comments.destroy', $comment->id) }}"
                      method="POST"
                    >
                      @csrf
                      <input type='hidden' name='_method' value='DELETE'></input>
                      <button class="btn btn-danger"   type='submit' onclick="return confirm('bạn có chắc chắn không?')" >Delete</button>
                    </form>
                    <a href="{{ route('comments.edit', $comment->id) }}">
                      <button class="btn btn-success" >Edit</button>
                    </a></td>
                    
                </tr>
            @endforeach
        </tbody>

</table>
<div class="page d-flex justify-content-center">
                    {{$comments->links()}}
                </div>
    
    @endsection