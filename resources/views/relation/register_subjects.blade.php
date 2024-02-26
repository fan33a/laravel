<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register Subject</title>
    <link rel="stylesheet" href="{{ asset('bs/css/bootstrap.min.css') }}">
    <script src="{{ asset('bs/js/bootstrap.min.js') }}"></script>
</head>
<body>
    <div class="container my-5">
        <h2>Wlacome <span class="text-primary">{{ $std->name }}</span></h2>
        <form action="{{ route('register_subjects_data') }}" method="POST">
            @csrf
            <table class="table table-bordered">
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Hours</th>
                </tr>
                @foreach ($subjects as $subject)
                <tr>
                    <td>
                        <input type="checkbox" {{ $std->subjects->find($subject->id) ? 'checked' : '' }} value="{{ $subject->id }}" name="subjects[]" id="subject">
                        {{ $subject->id }}
                    </td>
                    <td>{{ $subject->name }}</td>
                    <td>{{ $subject->hours }}</td>
                </tr>
                @endforeach
            </table>
            <button type="submit" class="btn btn-success">Register</button>
        </form>
    </div>
</body>
</html>