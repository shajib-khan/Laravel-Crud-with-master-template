@extends('layouts.master')

@section('content')
    <div class="container">
        <a class="btn btn-primary my-2" href="{{ url('/add-data') }}" role="button">Add Data</a>
        @if(Session::has('msg'))
        <p class="alert alert-success">{{ Session::get('msg') }}</p>
        @endif
        <table class="table table-bordered">
            <thead>
              <tr">
                <th scope="col">#</th>
                <th scope="col">Email</th>
                <th scope="col">Name</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
                @foreach($showData as $key=>$data)
              <tr>
                <td>{{ $key+1 }}</td>
                <td>{{ $data->name }}</td>
                <td>{{ $data->email }}</td>
                <td><a href="{{ url('/edit-data/'.$data->id) }}" class="btn btn-success">Edit</a></td>
                <td><a href="{{ url('/delete-data/'.$data->id) }}" onclick="return confirm('Are you Sure To delete!')" class="btn btn-danger">Delete</a></td>
              </tr>
              @endforeach

            </tbody>
          </table>
          {{ $showData->links() }}
    </div>
@endsection

