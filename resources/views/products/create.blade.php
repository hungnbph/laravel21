@extends('admin-layout.master')

@section('title', 'Edit student')

@section('ten', "Edit student ")
@section('content')
<form
        action="{{route('products.store')}}"
        method="POST"
        enctype="multipart/form-data"
    >
         <!-- Them token gui len -->
         @csrf
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="name">name</label>
      <input type="text" class="form-control" id="name" name="name"   >
      @if($errors->has('name'))
        {{$errors->first('name')}}
      @endif
    </div>
  </div>
  <div class="form-row">
    <div class="col-md-6">
    <label for="parent">category_id</label>
      <!-- <label for="phone">parent_id</label>
      <input type="text" class="form-control" name="phone" id="phone"  > -->
      <select name="category_id" id="parent_id" class="form-control">
        <option value="0"> chọn thư mục</option>
         <?php showCategories($category)   ?>
       
      </select>
      </div>
    </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="name">images</label>
      <input type="file" class="form-control" id="image_url" name="image_url" >
      @if($errors->has('image_url'))
        {{$errors->first('image_url')}}
      @endif
    </div>
  </div>

  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="name">description</label>
      <input type="text" class="form-control" id="description" name="description">
      @if($errors->has('description'))
        {{$errors->first('description')}}
      @endif
    </div>
  </div>

  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="name">price</label>
      <input type="text" class="form-control" id="price" name="price"   >
      @if($errors->has('price'))
        {{$errors->first('price')}}
      @endif
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="sale_percent">sale_percent</label>
      <input type="text" class="form-control" id="sale_percent" name="sale_percent">
      @if($errors->has('sale_percent'))
        {{$errors->first('sale_percent')}}
      @endif
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
    <label for="is_active">active</label>
    <select name="is_active" id="is_active" class="form-control">
        <option value="0">ẩn</option>
        <option value="1"> hiện</option>
      </select>
    </div>
  </div>

  <button type="submit" class="btn btn-primary">CREATE</button>
</form>

    
@endsection


<?php 
function showCategories($categories, $parent_id = 0, $char = '')
{
    foreach ($categories as $key => $item)
    {
        // Nếu là chuyên mục con thì hiển thị
        if ($item->parent_id == $parent_id)
        {
          echo'<option value="'.$item->id.'">'.$char.$item->name.'</option>';

            unset($categories[$key]);
             
            // Tiếp tục đệ quy để tìm chuyên mục con của chuyên mục đang lặp
            showCategories($categories, $item->id, $char.' -- ');
        }
    }
}

?>