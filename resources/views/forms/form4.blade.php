<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CV</title>
    <link rel="stylesheet" href="{{ asset('bs/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('bs/js/bootstrap.min.js') }}">
</head>
<body>
    <form class="p-2" action="{{ route('forms.form4_data') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <h1>Upload CV</h1>
        <div class="form mb-3">
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" id="name" value="{{ old('name') }} ">
            @error('name')
            <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>
        <div class="form mb-3">
            <label for="age">Age</label>
            <input type="text" name="age" class="form-control {{ $errors->has('age') ? 'is-invalid' : '' }}" id="age" value="{{ old('age') }} ">
             @error('age')
            <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>
        <div class="form mb-3">
            <label for="start_date">Start Learning Date</label>
            <input type="date" name="start_date" class="form-control {{ $errors->has('start_date') ? 'is-invalid' : '' }}" id="start_date" value="{{ old('start_date') }} ">
             @error('start_date')
            <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>
        <div class="form mb-3">
            <label for="end_date">End Learning Date</label>
            <input type="date" name="end_date" class="form-control {{ $errors->has('end_date') ? 'is-invalid' : '' }}" id="end_date" value="{{ old('end_date') }} ">
             @error('end_date')
            <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>
        <div class="form">
            <label for="cv">CV</label>
            <input type="file" name="cv" class="form-control {{ $errors->has('cv') ? 'is-invalid' : '' }}" id="cv">
             @error('cv')
            <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary mt-2">Send</button>
    </form>
</body>
</html>