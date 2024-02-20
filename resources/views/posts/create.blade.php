<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create New Post</title>
    <link rel="stylesheet" href="{{ asset('bs/css/bootstrap.min.css') }}">
    <script src="{{ asset('bs/js/bootstrap.min.js') }}"></script>
</head>
<body style="background: #eee">
    <div class="container my-5">
        <div class="d-flex justify-content-between align-items-center">
            <h1>Create New Post</h1>
            {{-- <a href="{{ route('posts.index') }}" class="btn btn-primary">All Posts</a> --}}
            <a onclick="history.back()" class="btn btn-primary">Return Back</a>
        </div>

        <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input name="title" value="{{ old('title') }}" type="text" class="form-control {{ $errors->has('title') ? 'is-invalid' : '' }}" id="title" aria-describedby="titleHelp">
                @error('title')
                <div id="titleHelp" class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="image">Image</label>
                <input type="file" name="image" class="form-control" id="image">
                @error('image')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="content">Content</label>
                <textarea style="resize: none" class="form-control {{ $errors->has('content') ? 'is-invalid' : '' }}" name="content" id="content" rows="5">{{ old('content') }}</textarea>
                @error('content')
                  <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Add</button>
        </form>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/6.8.3/tinymce.min.js"></script>
</body>
</html>