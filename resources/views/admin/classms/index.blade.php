@extends('admin.main-layout')

@section('contents')
<h1 class="mt-4 bg-blend-lighten text-center">ALL DATA OF CLASS INFORMATION</h1>  
<div class="row">
    <div class="container my-5 mx-1">
        <table class="table table-bordered">
            <thead class="thead-dark">
              <tr>
                <th scope="col">SID</th>
                <th scope="col">CLASS</th>
                <th scope="col" colspan="2" class="text-center">Action</th>
                
              </tr>
            </thead>
            <tbody>
                @foreach ($clas as $cla)
                    
                <tr>
                    <td>{{ $cla->id }}</td>
                    <td>{{ $cla->classname }}</td>
                    <td>
                        <a href="{{ url('/edit-class') }}/{{ $cla->id }}" class="btn btn-success">EDIT</a>
                    </td>
                    <td>
                        <a href="{{ url('/delete-class') }}/{{ $cla->id }}" class="btn btn-danger">DELETE</a>
                    </td>
                </tr>
                @endforeach
          </table>
          {{  $clas->onEachSide(1)->links()}}
        
    </div>
</div>
@endsection