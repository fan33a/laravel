<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Trashed Posts</title>
    <link rel="stylesheet" href="{{ asset('bs/css/bootstrap.min.css') }}">
    <script src="{{ asset('bs/js/bootstrap.min.js') }}"></script>
</head>
<body style="background: #eee">
    <div class="container my-5">
        <div class="d-flex justify-content-between align-items-center">
            <h1>Trashed Posts</h1>
            <a href="{{ route('posts.index') }}" class="btn btn-primary">All Posts</a>
        </div>
        {{--  --}}
        @if (session('message'))
        <div class="alert alert-{{ session('type') }} alert-dismissible fade show" role="alert">
            {{ session('message') }}
            <button class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
        {{--  --}}
        <table class="table table-striped text-center">
            <tr class="table-dark">
                <th>ID</th>
                <th>Title</th>
                <th>Content</th>
                <th>Image</th>
                <th>Actions</th>
            </tr>
            @if ($posts->count() <= 0)
                <tr>
                    <td colspan="5">No Data Deleted Found</td>
                </tr>
            @endif
            @foreach ($posts as $post)
                <tr>
                    <td>{{ $post->id }}</td>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->content }}</td>
                    <td><img src="{{ asset($post->image) }}" alt=""></td>
                    <td class="d-flex justyfi-contnet-center">
                        <a onclick="return confirm('Are you sure?!')" href="{{ route('posts.forcedelete',$post->id) }}" class="btn btn-success">Delete</a>
                        <a href="{{ route('posts.restore',$post->id) }}" class="btn btn-success">Undo</a>
                    </td>
                </tr>    
            @endforeach
        </table>
        {{ $posts->links() }}
    </div>
</body>
</html>