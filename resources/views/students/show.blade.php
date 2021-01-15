@extends('admin-layout.master')
@section('title', 'detail')
@section('ten', ' detail ')
@section('content')
    <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Phone</th>
      <th scope="col">Age</th>
      <th scope="col">Gender</th>
      <th scope="col">Address</th>
      <th scope="col">Active</th>
      
    </tr>
  </thead>
  <tbody>
                <tr>
                    <td>{{ $student->name }}</td>
                    <td>{{ $student->phone }}</td>
                    <td>{{ $student->age }} </td>
                    <td>
                        @if ($student->gender == 0)
                            Female
                        @elseif ($student->gender == 1)
                            Male
                        @else
                            Nothing
                        @endif
                    </td>
                    <td>{{ $student->adress }}</td>
                    <td>{{ $student->is_active == 1 ? 'Yes' : 'No' }}</td>
                    
                </tr>
        </tbody>

</table>
    
    @endsection
    
