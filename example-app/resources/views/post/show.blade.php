@extends('layouts.main')

@section('content')

    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">{{ $post->id }}. {{ $post->title }}</h5>
                <a cspan class="badge text-secondary rounded-pill text-bg-secondary p-3" href="{{ route('post.index') }}">Back</a>

            </div>
            <div class="modal-body">
                <p>{{ $post->content }}</p>
            </div>
            <div class="modal-footer">
                <a class="btn btn-primary" href="{{ route('post.edit', $post->id) }}">Edit</a>
                <form action="{{ route('post.delete', $post->id) }}" method="post">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-primary">Delete</button>
                </form>
            </div>
        </div>
    </div>



@endsection
