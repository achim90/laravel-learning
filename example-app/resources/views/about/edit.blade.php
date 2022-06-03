@extends('layouts.main')
@section('content')


      <form action="{{ route('about.update', $about->id) }}" method="post">
          <form>
            @csrf
            @method('patch')
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Name</label>
                <input type="text" name="name" class="form-control" id="exampleInputEmail1" value="{{ $about->name }}">

            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $about->email }}">
                <div id="emailHelp"  class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" id="exampleInputPassword1" value="{{ $about->password }}">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Photo</label>
                <input type="text" name="photo" class="form-control" id="exampleInputEmail1" value="{{ $about->photo }}">
            </div>

           <button type="submit" class="btn btn-primary">Update</button>
            <a class="btn btn-primary" href="{{ route('about.index') }}" >Back</a>
          </form>


@endsection



