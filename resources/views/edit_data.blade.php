@extends('layouts.master')

@section('content')
<div class="add-data">
    <div class="container">
        <a class="btn btn-primary my-2" href="{{ url('/') }}" role="button">Show Data</a>
        @if(Session::has('msg'))
        <p class="alert alert-success">{{ Session::get('msg') }}</p>
        @endif
        @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
        <form action="{{ url('/update-data/'.$editData->id) }}" method="post">
            @csrf
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Email address</label>
              <input type="text" class="form-control" name="email" value="{{ $editData->email }}"placeholder="Enter  Your Email" id="exampleInputEmail1">
              <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
                <label for="exampleInputText" class="form-label">Enter Your Name</label>
                <input type="text" class="form-control"name="name" value="{{ $editData->name }}"placeholder="Enter  Your Name" id="exampleInputText">
              </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </div>
</div>
@endsection
