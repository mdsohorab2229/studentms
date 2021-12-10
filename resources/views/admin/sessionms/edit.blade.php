
@extends('admin.main-layout')

@section('contents')
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4 bg-blend-lighten">UPDATE CLASS INFORMATION</h1>  
        <div class="row my-5">
            <div class="col col-8">
                <form action="{{ route('update.session', $sessions->id) }}" method="POST" >
                 @csrf
                 @method('PUT')
                <div class="form-group my-2">
                  <label for="classname">SESSION</label>
                  <input type="text" class="form-control" id="sessionname" name="sessionname" placeholder="Enter Class " value="{{ $sessions->sessionname }}" >           
                </div>

                <button type="submit" class="btn btn-primary my-3">UPDATE</button>
              </form>

            </div>
        </div>
    </div>
</main>
@endsection

