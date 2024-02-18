<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mail</title>
    <link rel="stylesheet" href="{{ asset('bs/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('bs/js/bootstrap.min.js') }}">
    <style>
        textarea {
            resize: none;
        }
    </style>
</head>
<body>
    <form class="p-2" action="{{ route('forms.contact_data') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <h1>Contact Us Form</h1>
        <div class="form mb-3">
            <label for="name">Name</label>
            <input type="text" name="name" placeholder="Name" class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" id="name" value="{{ old('name') }} ">
            @error('name')
            <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>
        <div class="form mb-3">
            <label for="email">Email</label>
            <input type="text" placeholder="Email" name="email" class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" id="email" value="{{ old('email') }} ">
             @error('email')
            <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>
        <div class="form mb-3">
            <label for="phone">Phone</label>
            <input type="text" name="phone" placeholder="Phone" class="form-control {{ $errors->has('phone') ? 'is-invalid' : '' }}" id="phone" value="{{ old('phone') }} ">
             @error('phone')
            <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>
        <div class="form mb-3">
            <label for="subject">Subject</label>
            <input type="text" name="subject" class="form-control {{ $errors->has('subject') ? 'is-invalid' : '' }}" id="subject" value="{{ old('subject') }} ">
             @error('subject')
            <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>
        <div class="form mb-3">
            <label for="image">Image</label>
            <input type="file" placeholder="image" name="image" class="form-control {{ $errors->has('image') ? 'is-invalid' : '' }}" id="image" value="{{ old('image') }} ">
             @error('image')
            <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>
        <label for="message">Message</label>
        <textarea class="form-control" name="message" placeholder="Message" id="message" rows="5" {{ $errors->has('message') ? 'in-valid' : '' }}>{{ old('message') }}</textarea>
        @error('message')
          <div class="text-danger">{{ $message }}</div>
        @enderror
        <button type="submit" class="btn btn-success mt-2 ps-5 pe-5">Send</button>
    </form>
</body>
</html>