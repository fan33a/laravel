<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Users</title>
    <link rel="stylesheet" href="{{ asset('bs/css/bootstrap.min.css') }}">
    <script src="{{ asset('bs/js/bootstrap.min.js') }}"></script>
</head>
<body>
    <div class="container">
        <h1>All Users</h1>
        <table class="table table-striped">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Insurance Start</th>
                <th>Insurance End</th>
            </tr>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    {{-- <td>{{ $user->insurance ? $user->insurance->start : '' }}</td>
                    <td>{{ $user->insurance ? $user->insurance->end : '' }}</td> --}}
                    <td>{{ $user->insurance ? $user->insurance->start : '' }}</td>
                    <td>{{ $user->insurance ? $user->insurance->end : '' }}</td>
                </tr>
            @endforeach
        </table>
    </div>
</body>
</html>