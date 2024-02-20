<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Post</title>
    <link rel="stylesheet" href="{{ asset('bs/css/bootstrap.min.css') }}">
    <script src="{{ asset('bs/js/bootstrap.min.js') }}"></script>
</head>
<body style="background: #eee">
    <div class="container my-5">
        <div class="d-flex justify-content-between align-items-center">
            <h1>Edit Post: <span class="text-danger">{{ $post->title }}</span></h1>
            {{-- <a href="{{ route('posts.index') }}" class="btn btn-primary">All Posts</a> --}}
            <a onclick="history.back()" class="btn btn-primary">Return Back</a>
        </div>

        <form action="{{ route('posts.update', $post->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input name="title" value="{{ old('title', $post->title) }}" type="text" class="form-control {{ $errors->has('title') ? 'is-invalid' : '' }}" id="title" aria-describedby="titleHelp">
                @error('title')
                <div id="titleHelp" class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="image">Image</label>
                <input type="file" name="image" class="form-control {{ $errors->has('image') ? 'is-invalid' : '' }}" id="image">
                <img src="{{ asset($post->image) }}" alt="">
                @error('image')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="content">Content</label>
                <textarea style="resize: none" class="form-control {{ $errors->has('content') ? 'is-invalid' : '' }}" name="content" id="content" rows="5">{{ old('content', $post->content) }}</textarea>
                @error('content')
                  <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Save</button>
        </form>
    </div>
</body>
</html>