@extends('layouts.main')

@section('content')
    <div>
        <a class="btn btn-primary md-3" href="{{route('post.create')}}" >Create</a>
    </div>
    <div>
        @foreach($posts as $post)
            <div><a href="{{ route('post.show', $post->id) }}"> {{$post->id}}. {{ $post->title }}</a></div>
        @endforeach
    </div>
@endsection
