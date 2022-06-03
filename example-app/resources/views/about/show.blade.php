@extends('layouts.main')

@section('content')
    <div>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Password</th>
            <th scope="col">Photo</th>
        </tr>

        <tr>
            <th scope="row">{{ $about->id}}</th>
            <td>{{ $about->name }}</td>
            <td>{{ $about->email }}</td>
            <td>{{ $about->password }}</td>
            <td>{{ $about->photo }}</td>
        </tr>
        </thead>
    </table>
    </div>
    <div>

        <form action="{{ route('about.delete', $about->id) }}" method="post">
            <a class="btn btn-primary" href="{{ route('about.edit', $about->id) }}">Edit</a>

            @csrf
            @method('delete')
            <button type="submit" class="btn btn-primary" >Delete</button>
            <a class="btn btn-primary" href="{{ route('about.index') }}" >Back</a>
        </form>
    </div>

@endsection
