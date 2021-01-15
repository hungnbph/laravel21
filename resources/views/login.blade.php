@extends('student-layout.mater')
@section('title', 'title login')
@section('header', 'header login')
    <form method="POST" action="{{ route('post-login') }}">
        @csrf
        <input name="username" placeholder="Username" type="text" />
        <input name="password" placeholder="Password" type="password" />
        <button type="submit">Submit</button>
    </form>
    @section('footer', 'footer login')
    @endsection
