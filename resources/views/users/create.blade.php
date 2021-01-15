@extends('admin-layout.master')

@section('title', 'Edit student')

@section('ten', "create student ")
@section('content')

<form method="POST" action="{{route('users.store')}}" >
            @csrf
            <div class="row">
                <div class="col-lg-6 col-12 mx-auto">
                    <div class="statbox widget box box-shadow">
                        <div class="row">
                            <div class="col">
                            <div class="col-lg-6 col-12 mx-auto">
                    <div class="statbox widget box box-shadow">
                            <div class="form-group">
                            <label class="text-primary">name</label>
                            <input type="text" name="name" placeholder="name" class="form-control">
                                @if($errors->has('name'))
                                {{$errors->first('name')}}
                                @endif
                        </div>
                        </div>
                        </div>
                        <div class="col-lg-6 col-12 mx-auto">
                    <div class="statbox widget box box-shadow">
                        <div class="form-group">
                            <label class="text-primary">Email</label>
                            <input type="email" name="email" placeholder="Your email.." class="form-control">
                            @if($errors->has('email'))
                            {{$errors->first('email')}}
                            @endif
                        </div>
                        </div>
                        </div>
                        <div class="col-lg-6 col-12 mx-auto">
                    <div class="statbox widget box box-shadow">
                        <div class="form-group">
                            <label class="text-primary">Password</label>
                            <input type="password" name="password" placeholder="Your Password..." class="form-control">
                            @if($errors->has('password'))
                               {{$errors->first('password')}}
                             @endif
                        </div>
                        </div>
                        </div>
                        <div class="col-lg-6 col-12 mx-auto">
                    <div class="statbox widget box box-shadow">
                        <div class="form-group">
                            <label class="text-primary">Confirm Password</label>
                            <input type="password" name="confirm_password" placeholder="Confirm Your Password..." class="form-control">
                            @if($errors->has('confirm_password'))
                            {{$errors->first('confirm_password')}}
                            @endif
                        </div>
                    </div>
                </div>                       
                <div class="col-lg-6 col-12 mx-auto">
                    <div class="statbox widget box box-shadow">
                        <div class="form-group">
                            <label class="text-primary">Address</label>
                            <input type="text" name="adress" placeholder="Your Address..." class="form-control">
                            @if($errors->has('adress'))
                            {{$errors->first('adress')}}
                            @endif
                        </div>
                        <div class="form-row">
                         <div class="form-group col-md-6">
                         <label for="is_active">active</label>
                         <select name="is_active" id="is_active" class="form-control">
                             <option disabled value="0">khóa</option>
                             <option selected value="1"> hiện</option>
                        </select>
                        @if($errors->has('is_active'))
                            {{$errors->first('is_active')}}
                            @endif
                         </div>
                        </div>
                       
                        <div class="form-row">
                         <div class="form-group col-md-6">
                         <label for="role">role</label>
                         <select name="role" id="role" class="form-control">
                             <option selected value="0">khách</option>
                             <option  value="1"> quản lý</option>
                             <option disabled value="2"> admin</option>
                        </select>
                        @if($errors->has('role'))
                         {{$errors->first('role')}}
                         @endif
                         </div>
                        </div>
                        
                        </div>
                        <input type="submit" name="pass" class="mt-4 btn btn-primary text-right" value="Create">
                        <a href="#" class="mt-4 btn btn-danger text-right">Cancel</a>
                    </div>
                </div>
            </div>
        </form>
    
@endsection

