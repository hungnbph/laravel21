@extends('admin-layout.master')
@section('title', 'title list')

@section('ten', ' list comment')

@section('content')
<div class="row">
    <div id="basic" class="col-lg-12 layout-spacing">

        <form method="post" action="{{route('comments.update',$comment->id)}}" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="_method" value="PUT" id="">
            <input type="hidden" name="user_id" value="{{Auth::user()->id}}" id="">
            <input type="hidden" name="product_id" value="{{$comment->product_id}}" id="">
            <div class="row">
                <div class="col-lg-6 col-12 mx-auto">
                    <div class="statbox widget box box-shadow">
                        <div class="form-group">
                            <label class="text-primary">Edit Your Content</label>
                            <textarea name="content" id="" cols="30" rows="6" class="form-control" >{{$comment->content}}</textarea>
                        </div>
                        <input type="submit" name="pass" class="mt-4 btn btn-primary text-right" value="Save it">
                        <a href="javascript:history.back()" class="mt-4 btn btn-danger text-right">Cancel</a>
                    </div>
                </div>
        </form>

    </div>
</div>
</div>
    @endsection