@extends('admin.main-layout')

@section('contents')
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4 bg-blend-lighten">ADD CLASS INFORMATION</h1>  
        <div class="row my-5">
            <div class="col col-8">
                <form action="{{ url('/add-class') }}" method="POST" >
                 @csrf
                <div class="form-group my-2">
                  <label for="classname">CLASS</label>
                  <input type="text" class="form-control" id="classname" name="classname" placeholder="Enter Class " >           
                </div>

                <button type="submit" class="btn btn-primary my-3">Submit</button>
              </form>

            </div>
        </div>
    </div>
</main>
@endsection

