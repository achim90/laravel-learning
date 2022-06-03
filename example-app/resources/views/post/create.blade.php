@extends('layouts.main')

@section('content')
    <div>
        <form action="{{ route('post.store') }}" method="post">
            @csrf
            <div class="mb-3">
                <label for="User" class="form-label">User</label>
                <input value="{{ old('user_id') }}" name="user_id" type="text" class="form-control" id="User"
                       placeholder="User">
                @error('user_id')
                <p class="alert alert-danger">{{$message}}</p>
                @enderror
            </div>
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input value="{{ old('title') }}" type="text" name="title" class="form-control" id="title"
                       placeholder="Title">
                @error('title')
                <p class="alert alert-danger">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-3">
                <label for="content" class="form-label">Content</label>
                <textarea name="content" class="form-control" id="content"
                          placeholder="Content">{{ old('content') }}</textarea>
                @error('content')
                <p class="alert alert-danger">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-3">
                <label for="image" class="form-label">Image</label>
                <input value="{{ old('image') }}" name="image" type="text" class="form-control" id="image"
                       placeholder="Image">
                @error('image')
                <p class="alert alert-danger">{{$message}}</p>
                @enderror
            </div>

            <div>
                <label for="tags" class="form-label">Tags</label>
                <select class="form-select" multiple aria-label="multiple select example" name="tags[]">
                    <div>Muslim</div>
                    @foreach($tags as $tag)
                        <option value="{{$tag->id}}">{{$tag->title}}</option>
                    @endforeach💋💋🤗
                </select>
            </div>

            <div>
                <label for="image" class="for   m-label">Categories</label>
                <select class="form-select " aria-label="Default select example" name="category_id">
                    <option class=selected>Open this select menu</option>
                    @foreach($categories as $category)
                        <option
                            {{ old('category_id') == $category -> id ? ' selected' : ''}}

                            value="{{$category->id}}">{{$category->title}}</option>
                    @endforeach
                </select>
            </div>

            <div>
                <button type="submit" class="btn btn-primary">Create</button>
            </div>
        </form>
        <p></p>

    </div>
@endsection
