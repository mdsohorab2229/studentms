@extends('admin.main-layout')

@section('contents')
<h1 class="mt-4 bg-blend-lighten text-center">ALL DATA OF SESSION INFORMATION</h1>  
<div class="row">
    <div class="container my-5 mx-1">
        <table class="table table-bordered">
            <thead class="thead-dark">
              <tr>
                <th scope="col">SID</th>
                <th scope="col">SESSION</th>
                <th scope="col" colspan="2" class="text-center">Action</th>
                
              </tr>
            </thead>
            <tbody>
                @foreach ($sessions as $ses )
                    <tr>
                        <td>{{ $ses->id }}</td>
                        <td>{{ $ses->sessionname }}</td>
                        <td><a href="{{ route('edit.session',$ses->id) }}" class="btn btn-success">EDIT</a></td>
                        <td><a href="{{ route('delete.session', $ses->id )}}" class="btn btn-danger">DELETE</a></td>
                    </tr>
                @endforeach
          </table>
          {{ $sessions->onEachSide(1)->links()}}
        
    </div>
</div>
@endsection

