@extends('admin-layout.master')
@section('title', 'title list')

@section('ten', ' list')

@section('content')
    <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">student</th>
      <th scope="col">post</th>
      <th scope="col">content</th>
      <th scope="col">detail</th>
      <th scope="col">active</th>
    </tr>
  </thead>
  <tbody>
            @foreach($comments as $comment)
                <tr>
                    <td>{{ $comment->student_id }}</td>
                    <td>{{ $comment->post_id }}</td>
                    <td>{{ $comment->content }} </td>
                    <td><button class="btn btn-warning" > <a href="{{ route('comments.show', $comment->id) }}" > detail</a></button></td>
                    <td><form
                      action="{{ route('comments.destroy', $comment->id) }}"
                      method="POST"
                    >
                      @csrf
                      <input type='hidden' name='_method' value='DELETE'></input>
                      <button class="btn btn-warning"  type='submit'>Delete</button>
                    </form>
                    <a href="{{ route('comments.edit', $comment->id) }}">
                      <button class="btn btn-warning" >Edit</button>
                    </a></td>
                </tr>
            @endforeach
        </tbody>

</table>

    
    @endsection