@extends('admin-layout.master')
@section('title', 'title list')

@section('ten', ' list user')

@section('content')
    <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">name</th>
      <th scope="col" >email</th>
      <th scope="col">password</th>
      <th scope="col">address</th>
      <th scope="col">role</th>
      <th scope="col">is_active</th>
      <th scope="col">Detail</th>
      <th scope="col">action</th>
    </tr>
  </thead>
  <tbody>
            @foreach($users as $user)
                <tr>
                    <td>{{ $user->name }}</td>
                    <td >{{ $user->email }}</td>
                    <td>{{ $user->password }} </td>
                    <td>{{ $user->address}} </td>
                    <td>@if ($user->role ==0)
                          tài khoản khách hàng
                        @elseif( $user->role ==1 )
                            tài khoản quản trị thông thường
                        @else 
                            admin
                        @endif</td>
                    <td>@if ($user->is_active == 1)
                            đang trong sử dụng
                        @else
                           tài khoản đang tạm thời bị khóa khóa tài khoản
                        @endif</td>
                    <td><button class="btn btn-warning" >  <a href="{{ route('users.show', $user->id) }}" > detail</a></button></td>
                    <td><form
                      action="{{ route('users.destroy', $user->id) }}"
                      method="POST"
                    >
                      @csrf
                      <input type='hidden' name='_method' value='DELETE'></input>
                      <button class="btn btn-danger"   type='submit' onclick="return confirm('bạn có chắc chắn không?')" >Delete</button>
                    </form>
                    <a href="{{ route('users.edit', $user->id) }}">
                      <button class="btn btn-success" >Edit</button>
                    </a></td>
                    
                </tr>
            @endforeach
        </tbody>

</table>
<div class="page d-flex justify-content-center">
                    {{$users->links()}}
                </div>
    
    @endsection