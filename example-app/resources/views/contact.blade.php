@extends('layouts.main')

@section('content')
    <div>
{{--        @foreach($post as $p)--}}
{{--            <div>{{ $p->title }}</div>--}}
{{--            @foreach($p->tags as $tag)--}}
{{--                <div>{{ $tag->id }}</div>--}}
{{--            @endforeach--}}
{{--        @endforeach--}}
{{--    </div>--}}
{{--    <div>--}}

        @foreach($post->tags as $p)
            <div>{{$p->id}}</div>
        @endforeach
{{--        {{$post->tags}}--}}
    </div>
@endsection
