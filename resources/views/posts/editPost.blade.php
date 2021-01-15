@extends('admin-layout.master')

@section('title', 'Edit post')

@section('ten', "Edit post  $post->desc")
@section('content')
<form
method="POST"
        action="{{route('posts.update', $post->id) }}">
         <!-- Them token gui len -->
         @csrf
        <!-- Thay doi phuong thuc gui request thanh PUT -->
        <input type='hidden' name='_method' value='PUT' />
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="desc">desc</label>
      <input type="text" class="form-control" id="desc" name="desc"  value="{{$post->desc}}" >
    </div>
    <div class="form-group col-md-6">
      <label for="content">content</label>
      <input type="text" class="form-control" name="content" id="content" value="{{$post->content}}" >
    </div>
  </div>
  <div class="form-group">
    <label for="image_url">images</label>
    <input type="text" class="form-control" id="image_url" name="image_url" value="{{$post->image_url}}" >
  </div>
  <div class="form-group">
    <label for="student_id">student_id</label>
    <input type="text" class="form-control" name="student_id" id="student_id" value="{{$post->student_id}}">
  </div>
  <div class="form-group">
    <label for="status"></label>
    <input type="text" class="form-control" name="status" id="status" value="{{$post->status}}">
  </div>


  





  <button type="submit" class="btn btn-primary">UPDATE</button>
</form>

    
@endsection