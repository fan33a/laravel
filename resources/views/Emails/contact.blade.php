<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mail</title>
</head>
<body style="background: #f7f9fa; padding: 30px; font-family: Arial, Helvetica, sans-serif;">
    <div style="width: 600px; margin: 0 auto; background: #fff; border: 1.5px solid #eee; padding: 30px"></div>
    <h3>Dear Admin,</h3>
    <p>Hope this mail find you will</p>
    <br>
    <p>There is new contact us in with the following information</p>
    <p><b>Name: </b>{{ $data['name'] }}</p>
    <p><b>Email: </b>{{ $data['email'] }}</p>
    <p><b>Phone: </b>{{ $data['phone'] }}</p>
    <p><b>Subject: </b>{{ $data['subject'] }}</p>
    <p><b>Message: </b>{{ $data['message'] }}</p>
    <img src="{{ asset($data['image']) }}" alt="">
    
    <br>
    <br>
    <p>Best Regards</p>

</body>
</html>