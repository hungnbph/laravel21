@extends('admin-layout.master')
@section('title', 'title list')

@section('ten', ' list')

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
      <th scope="col">Detail</th>
      <th scope="col">action</th>
      
    </tr>
  </thead>
  <tbody>
            @foreach($students as $student)
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
                    <td><button class="btn btn-warning" >  <a href="{{ route('students.show', $student->id) }}" > detail</a></button></td>
                    <td><form
                      action="{{ route('students.destroy', $student->id) }}"
                      method="POST"
                    >
                      @csrf
                      <input type='hidden' name='_method' value='DELETE'></input>
                      <button class="btn btn-warning"  type='submit'>Delete</button>
                    </form>
                    <a href="{{ route('students.edit', $student->id) }}">
                      <button class="btn btn-warning" >Edit</button>
                    </a></td>
                </tr>
            @endforeach
        </tbody>

</table>

    
    @endsection