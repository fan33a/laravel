<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('bs/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('bs/js/bootstrap.min.js') }}">
    <title>Form1</title>
</head>
<body>
    <h1>Form Basic</h1>

    <form action="{{ route('forms.form1_data') }}" method="POST">
        {{-- <input type="hidden" name="_token" value="{{ csrf_token() }}"> --}}
        {{-- {{ csrf_field() }} --}}
        @csrf
        <label for="">Name</label>
        <input type="text" name="name">
        <label for="">Age</label>
        <input type="number" name="age">

        <label for="check">Radio check
        <input type="radio" id="check" name="check" value="0">
        </label>

        <button type="submit">Send</button>
    </form>
</body>
</html>