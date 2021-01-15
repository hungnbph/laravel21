@extends('admin-layout.master')

@section('title', 'Edit student')

@section('ten', "Edit student  $category->name")
@section('content')
<form
method="POST"
        action="{{route('categories.update', $category->id) }}">
         <!-- Them token gui len -->
         @csrf
        <!-- Thay doi phuong thuc gui request thanh PUT -->
        <input type='hidden' name='_method' value='PUT' />
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="name">name</label>
      <input type="text" class="form-control" id="name" name="name"  value="{{$category->name}}" >
    </div>
</div>
<div class="form-row">
    <div class="col-md-6">
    <label for="parent">parent category</label>
      <!-- <label for="phone">parent_id</label>
      <input type="text" class="form-control" name="phone" id="phone"  > -->
      <select name="parent_id" id="parent_id" class="form-control">
          @foreach($categories as $cate)
         <option value="{{$cate->id}}">{{$cate->name}}</option>
         @endforeach
         <option value="0"> chọn thư mục cha</option>
       
      </select>
      </div>
    </div>
    <div class="form-row">
    <div class="col-md-6">
    <label for="status">status</label>
      <!-- <label for="phone">parent_id</label>
      <input type="text" class="form-control" name="phone" id="phone"  > -->
      <select name="status" id="status" class="form-control">
          @if($category->status==1)
          <option selected value="1">hiện</option>
          <option value="0">ẩn</option>
          @else
          <option value="1">hiện</option>
          <option selected value="0">ẩn</option>
          @endif
         


      </select>
      </div>
    </div>
  <button type="submit" class="btn btn-primary">UPDATE</button>
</form>

    
@endsection