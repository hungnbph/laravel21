@extends('admin-layout.master')

@section('title', 'Edit student')

@section('ten', "Edit student ")
@section('content')
<form method="post" action="{{route('products.update',$product->id)}}" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="_method" value="PUT">
            <div class="row">
                <div class="col-lg-6 col-12 mx-auto">
                    <div class="statbox widget box box-shadow">

                        <div class="form-group">
                            <label class="text-primary">Name</label>
                            <input type="text" name="name" value="{{$product->name}}" class="form-control">
                            
                            @if($errors->has('name'))
                            {{$errors->first('name')}}
                            @endif
                        </div>
                        <div class="form-row">
                        <div class="col-md-6">
                        <label for="parent">category_id</label>
                          <!-- <label for="phone">parent_id</label>
                          <input type="text" class="form-control" name="phone" id="phone"  > -->
                          <select name="category_id" id="parent_id" class="form-control">
                             <?php showCategories($category)   ?>
                           
                           </select>
                          </div>
                        </div>
                        <div class="form-group">
                            <label class="text-primary">Image</label>
                            <input type="file" name="image_url" class="form-control"><img src="{{url('/'.$product->image_url)}}" width=500>
                            @if($errors->has('image_url'))
                            {{$errors->first('image_url')}}
                            @endif
                        </div>
                        
                        <div class="form-group">
                            <label class="text-primary">Price</label>
                            <input type="number" min="0" name="price" value="{{$product->price}}" class="form-control">
                            @if($errors->has('price'))
                            {{$errors->first('price')}}
                            @endif
                        </div>
                        <div class="form-group">
                            <label class="text-primary">Sale Percent</label>
                            <input type="text" min="0" step="any" name="sale_percent" value="{{$product->sale_percent}}" class="form-control">
                            @if($errors->has('sale_percent'))
                            {{$errors->first('sale_percent')}}
                            @endif
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-12 mx-auto">
                    <div class="statbox widget box box-shadow">
                        <div class="form-group">
                            <label class="text-primary">is_active</label>
                            <select name="is_active" class="form-control" id="">
                                <option value="1" {{($product->is_active) == 1 ? "selected" : ""}}>hiện</option>
                                <option value="0" {{($product->is_active) == 0 ? "selected" : ""}}>ẩn</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="text-primary">Description</label>
                            <textarea name="description" id="" cols="10" rows="10" class="form-control">{{$product->description}}</textarea>
                            @if($errors->has('description'))
                            {{$errors->first('description')}}
                            @endif
                        </div>
                        <input type="submit" name="pass" class="mt-4 btn btn-primary text-right" value="Update">
                        <a href="{{route('products.index')}}" class="mt-4 btn btn-danger text-right">Cancel</a>
                    </div>
                </div>
        </form>

    
@endsection


<?php 
function showCategories($aaaaaa, $parent_id = 0, $char = '')
{
    foreach ($categories as $key => $item)
    {
        // Nếu là chuyên mục con thì hiển thị
        if ($item->parent_id == $parent_id)
        {
          echo'<option value="'.$item->id.'">'.$char.$item->name.'</option>';

            unset($categories[$key]);
             
            // Tiếp tục đệ quy để tìm chuyên mục con của chuyên mục đang lặp
            showCategories($aaaaaa, $item->id, $char.' -- ');
        }
    }
}

?>