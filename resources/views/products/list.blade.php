@extends('admin-layout.master')
@section('title', 'title list')

@section('ten', ' list product')

@section('content')
    <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">name</th>
      <th scope="col" >category_id</th>
      <th scope="col">image_url</th>
      <th scope="col">description</th>
      <th scope="col">price</th>
      <th scope="col">sale_percent</th>
      <th scope="col">is_active</th>
      <th scope="col">Detail</th>
      <th scope="col">action</th>
    </tr>
  </thead>
  <tbody>
            @foreach($products as $product)
                <tr>
                    <td>{{ $product->name }}</td>
                    @if(isset($product->category->name))
                    <td>{{$product->category->name}}</td>
                    @else
                    <td>null</td>
                    @endif
                    <td> <img src="{{url('/public/'.$product->image_url)}}" alt="" width="100" height="80"> </td>
                    <td>{{ $product->description }} </td>
                    <td>{{ $product->price}} </td>
                    <td>{{ $product->sale_percent}} </td>
                    <td>@if ($product->is_active == 1)
                            đang trong sử dụng
                        @else
                            ngừng hoạt động
                        @endif</td>
                    <td><button class="btn btn-warning" >  <a href="{{ route('products.show', $product->id) }}" > detail</a></button></td>
                    <td><form
                      action="{{ route('products.destroy', $product->id) }}"
                      method="POST"
                    >
                      @csrf
                      <input type='hidden' name='_method' value='DELETE'></input>
                      <button class="btn btn-danger"   type='submit' onclick="return confirm('bạn có chắc chắn không?')" >Delete</button>
                    </form>
                    <a href="{{ route('products.edit', $product->id) }}">
                      <button class="btn btn-success" >Edit</button>
                    </a></td>
                    
                </tr>
            @endforeach
        </tbody>

</table>
<div class="page d-flex justify-content-center">
                    {{$products->links()}}
                </div>
    
    @endsection