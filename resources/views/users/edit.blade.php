@extends('admin-layout.master')

@section('title', 'Edit user')

@section('ten', "Edit user ")
@section('content')
<form method="post" action="{{route('users.update',$user->id)}}" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="_method" value="PUT">
            <div class="row">
                <div class="col-lg-6 col-12 mx-auto">
                    <div class="statbox widget box box-shadow">

                        <div class="form-group">
                            <label class="text-primary">Name</label>
                            <input type="text" name="name" value="{{$user->name}}" class="form-control">
                            
                            @if($errors->has('name'))
                            <p style="color:red">{{$errors->first('name')}}<p>
                            @endif
                        </div>
                        <div class="form-group">
                            <label class="text-primary">email</label>
                            <input type="email" name="email" value="{{$user->email}}" class="form-control">
                            
                            @if($errors->has('email'))
                            <p style="color:red">{{$errors->first('email')}}<p>
                            @endif
                        </div>
                        
                        
                        <div class="form-group">
                            <label class="text-primary">Địa chỉ</label>
                            <input type="text"  step="any" name="adress" value="{{$user->adress}}" class="form-control">
                            @if($errors->has('adress'))
                            <p style="color:red">{{$errors->first('adress')}}<p>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-12 mx-auto">
                    <div class="statbox widget box box-shadow">
                        <input type="submit" class="mt-4 btn btn-primary text-right" value="Update">
                        <a  href="{{route('users.index')}}" class="mt-4 btn btn-danger text-right">Cancel</a>
                    </div>
                </div>
        </form>

    
@endsection

