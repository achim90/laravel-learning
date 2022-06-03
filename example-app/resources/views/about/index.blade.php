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
            <thead>
        @foreach($abouts as $about )

            <tr>
                <th scope="row">{{ $about->id}}</th>
                <td><a href="{{ route('about.show', $about->id) }}">{{ $about->name }}</a></td>
                <td>{{ $about->email }}</td>
                <td>{{ $about->password }}</td>
                <td>{{ $about->photo }}</td>
            </tr>



        @endforeach
        </table>
        </div>
    <div>
        <a class="btn btn-primary" href="{{route('about.create')}}">Create</a>
    </div>

@endsection
