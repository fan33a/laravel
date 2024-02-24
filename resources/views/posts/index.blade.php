<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Posts</title>
    <link rel="stylesheet" href="{{ asset('bs/css/bootstrap.min.css') }}">
    <script src="{{ asset('bs/js/bootstrap.min.js') }}"></script>
</head>
<body style="background: #eee">
    <div class="container my-5">
        <div class="d-flex justify-content-between align-items-center">
            <h1>All Posts</h1>
            <div>
                <a href="{{ route('posts.trash') }}" class="btn btn-danger">Trashed Posts</a>
                <a href="{{ route('posts.create') }}" class="btn btn-primary">Add New Post</a>
            </div>
        </div>
        @if (session('message'))
        <div class="alert alert-{{ session('type') }} alert-dismissible fade show" role="alert">
            {{ session('message') }}
            <button class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
        <table class="table table-striped text-center">
            <tr class="table-dark">
                <th>ID</th>
                <th>Title</th>
                <th>Content</th>
                <th>Image</th>
                <th>Created At</th>
                <th>Updated At</th>
                <th>Actions</th>
            </tr>
            @if ($posts->count() <= 0)
                <tr>
                    <td colspan="7">No Data Found</td>
                </tr>
            @endif
            @foreach ($posts as $post)
                <tr>
                    <td>{{ $post->id }}</td>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->content }}</td>
                    <td><img src="{{ $post->image }}" alt=""></td>
                    <td>{{ $post->created_at->format('d M Y') }}</td>
                    <td>{{ $post->updated_at->diffForHumans()}}</td>
                    <td class="">
                        <form action="{{ route('posts.destroy',$post->id) }}" method="post">
                        @csrf
                        @method('delete')
                        <button onclick="return confirm('Are you sure?')" class="btn btn-danger d-inline" type="submit">Delete</button>
                        </form>
                        <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-warning">Edit</a>
                    </td>
                </tr>    
            @endforeach
        </table>
        {{ $posts->links() }}
    </div>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        const Toast = Swal.mixin({
        toast: true,
        position: "top-end",
        showConfirmButton: false,
        timer: 3000,
        timerProgressBar: true,
        didOpen: (toast) => {
        toast.onmouseenter = Swal.stopTimer;
        toast.onmouseleave = Swal.resumeTimer;
        }
        });
        Toast.fire({
        icon: "{{ session('type') }}",
        title: "{{ session('message') }}"
        });
    </script>
    <script>
        tinymce.init({
            selector: 'textarea'
        });
    </script>
</body>
</html>