@extends('admin.main-layout')

@section('contents')
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4 bg-blend-lighten">UPDATE STUDENT INFORMATION</h1>  
        <div class="row my-5">
            <div class="col col-8">
                <form action="{{ url('/update-students') }}/{{ $student->id  }}" method="POST" enctype="multipart/form-data">
                 @csrf
                  @method('PUT')
                <div class="form-group my-2">
                  <label for="fastname">Fast Name</label>
                  <input type="text" class="form-control" id="fastname" name="fastname" placeholder="Enter Your Fast Name" value="{{ $student->fastname }}" >           
                </div>
                <div class="form-group my-2">
                    <label for="lastname">Last Name</label>
                    <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Enter Your Last Name" value="{{ $student->fastname }}" >           
                  </div>

                  <div class="form-group my-2">
                    <label for="img">Upload Image</label>
                    <input type="file" class="form-control" id="img" name="img" placeholder="Enter Your Last Name"  > 
                    <img src="{{ asset('uploads/images') }}/{{ $student->img }}" alt="Image" width="100px" height="70px">          
                  </div>

                  <div class="form-group my-2">
                    <label for="fathername">Father Name</label>
                    <input type="text" class="form-control" id="fathername" name="fathername" placeholder="Enter Your Father Name" value="{{ $student->fathername }}" >           
                  </div>

                  <div class="form-group my-2">
                    <label for="number">Number</label>
                    <input type="text" class="form-control" id="number" name="number" placeholder="Enter Your Number" value="{{ $student->number }}">           
                  </div>

                <button type="submit" class="btn btn-primary my-3">UPDATE</button>
              </form>

            </div>
        </div>
    </div>
</main>
@endsection

