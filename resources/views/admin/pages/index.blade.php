@extends('admin.main-layout')

@section('contents')
<h1 class="mt-4 bg-blend-lighten text-center">ALL DATA OF STUDENT INFORMATION</h1>  
<div class="row">
    <div class="container my-5">
        <table class="table table-bordered">
            <thead class="thead-dark">
              <tr>
                <th scope="col">SID</th>
                <th scope="col">First Name</th>
                <th scope="col">Last Name</th>
                <th scope="col">Photo</th>
                <th scope="col">Father Name</th>
                <th scope="col">Number</th>
                <th scope="col" colspan="3" class="text-center">Action</th>
                
              </tr>
            </thead>
            <tbody>
              @foreach ($student as $stud)
              <tr>
                <td>{{ $stud->id }}</td>
                <td>{{ $stud->fastname }}</td>
                <td>{{ $stud->lastname }}</td>
                <td>
                  <img src="{{ asset('uploads/images')}}/{{ $stud->img  }}" alt="Images" width="100px" height="70px">
                </td>
                <td>{{ $stud->fathername }}</td>
                <td>{{ $stud->number }}</td>
                <td>
                 <a href="{{ url('/edit-students') }}/{{ $stud->id }}" class="btn btn-success">Edit</a>
                </td>
                <td><a href="{{ url('/delete-students') }}/{{ $stud->id }}" class="btn btn-danger">Delete</a></td>
              
              </tr>
              @endforeach
            </tbody>
          </table>
          <div class="d-flex my-3 float-left">
            {{ $student->onEachSide(1)->links() }}
          </div>
        
          
        
    </div>
</div>
@endsection