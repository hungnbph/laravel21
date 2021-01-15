@extends('admin-layout.master')

@section('title', 'Edit student')

@section('ten', "Edit student  $student->name")
@section('content')
<form
method="POST"
        action="{{route('students.update', $student->id) }}">
         <!-- Them token gui len -->
         @csrf
        <!-- Thay doi phuong thuc gui request thanh PUT -->
        <input type='hidden' name='_method' value='PUT' />
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="name">name</label>
      <input type="text" class="form-control" id="name" name="name"  value="{{$student->name}}" >
    </div>
    <div class="form-group col-md-6">
      <label for="phone">phone</label>
      <input type="text" class="form-control" name="phone" id="phone" value="{{$student->phone}}" >
    </div>
  </div>
  <div class="form-group">
    <label for="age">age</label>
    <input type="text" class="form-control" id="age" name="age" value="{{$student->age}}" >
  </div>
  <div class="form-group">
    <label for="address">Address</label>
    <input type="text" class="form-control" name="adress" id="adress" value="{{$student->adress}}">
  </div>


  
  <div class="form-group">
  <label for="gender">gender</label>
  <div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="gender" value="0" {{$student->gender === 0 ? "checked" : ""}}>
  <label class="form-check-label" for="nam">nam</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="gender" value="1" {{$student->gender === 1 ? "checked" : ""}}>
  <label class="form-check-label" for="nu">nữ</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="gender" value="2" {{$student->gender === 2 ? "checked" : ""}}>
  <label class="form-check-label" for="xd">không xác định</label>
</div>
</div>


<div class="form-group">
  <label for="status">status</label>
  <div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="is_active" value="0" {{$student->gender === 0 ? "checked" : ""}}>
  <label class="form-check-label" for="inlineRadio1">Deactive</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="is_active" value="1" {{$student->gender === 1 ? "checked" : ""}}>
  <label class="form-check-label" for="inlineRadio2">Active</label>
</div>
</div> 




  <button type="submit" class="btn btn-primary">UPDATE</button>
</form>

    
@endsection