@extends('admin-layout.master')
@section('title', 'title list')

@section('ten', ' list Post')

@section('content')
    <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">desc</th>
      <th scope="col" class="huy1">content</th>
      <th scope="col">image_url</th>
      <th scope="col">student_id</th>
      <th scope="col">status</th>
      <th scope="col">Detail</th>
      <th scope="col">action</th>
    </tr>
  </thead>
  <tbody>
            @foreach($posts as $post)
                <tr>
                    <td>{{ $post->desc }}</td>
                    <td class="huy1">{{ $post->content }}</td>
                    <td>{{ $post->image_url }} </td>
                    <td>{{ $post->student_id }} </td>
                    <td>{{ $post->status == 1 ? 'Yes' : 'No' }}</td>
                    <td><button class="btn btn-warning" >  <a href="{{ route('posts.show', $post->id) }}" > detail</a></button></td>
                    <td><form
                      action="{{ route('posts.destroy', $post->id) }}"
                      method="POST"
                    >
                      @csrf
                      <input type='hidden' name='_method' value='DELETE'></input>
                      <button class="btn btn-danger"  type='submit'>Delete</button>
                    </form>
                    <a href="{{ route('posts.edit', $post->id) }}">
                      <button class="btn btn-success" >Edit</button>
                    </a></td>
                    
                </tr>
            @endforeach
            <tr><td colspan="6">{{$posts->links()}}</td></tr>
        </tbody>

</table>
    
    @endsection