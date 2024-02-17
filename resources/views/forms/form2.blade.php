<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form 2</title>
    <link rel="stylesheet" href="{{ asset('bs/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('bs/js/bootstrap.min.js') }}">
</head>
<body>
    <form class="p-2" action="{{ route('forms.form2_data') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form mb-3">
            <h1>Form Upladed file</h1>
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control" id="name">
        </div>
        <div class="form">
            <label for="Photo">Photo</label>
            <input type="file" name="image" class="form-control" id="Photo">
        </div>
        <button type="submit" class="btn btn-primary mt-2">Send</button>
    </form>
</body>
</html>