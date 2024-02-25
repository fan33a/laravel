<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $post->title }}</title>
    <link rel="stylesheet" href="{{ asset('bs/css/bootstrap.min.css') }}">
    <script src="{{ asset('bs/js/bootstrap.min.js') }}"></script>
</head>
<body>
    <div class="container text-center">
        <h1>{{ $post->title }}</h1>
         <img src="{{ asset($post->image) }}" alt="">
         <p>{{ $post->content }}</p>

        <hr>

        <div class="comments w-50 text-start mx-auto">
            <h3>Commnets({{ $post->comments->count() }})</h3>
            @foreach ($post->comments as $comment)
                <h5>{{ $comment->user->name }}</h5>
                <p>{{ $comment->comment }}</p>
                @if (! $loop->last)
                    <hr>
                @endif
            @endforeach
            <form action="{{ route('post.add_comment') }}" method="POST">
                @csrf
                <input type="hidden" name="post_id" value="{{ $post->id }}">
                <input type="text" name="comment" class="form-control" placeholder="Type a comment here...">
                <button type="submit" class="btn btn-dark mt-2">Send</button>
            </form>
        </div>
    </div>
</body>
</html>