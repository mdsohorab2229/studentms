@extends('admin.main-layout')

@section('contents')
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4 bg-blend-lighten">ADD SESSION INFORMATION</h1>  
        <div class="row my-5">
            <div class="col col-8">
                <form action="{{ route('add.session') }}" method="POST" >
                 @csrf
                <div class="form-group my-2">
                  <label for="sessionname">SESSION</label>
                  <input type="text" class="form-control" id="sessionname" name="sessionname" placeholder="Enter Session " >           
                </div>

                <button type="submit" class="btn btn-primary my-3">Submit</button>
              </form>

            </div>
        </div>
    </div>
</main>
@endsection

