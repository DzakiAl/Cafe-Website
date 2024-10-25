<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Thank you</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <div class="thanks-container">
        <div>
            <h1 class="thanks-sentence">Thanks for booking at Star Cafe</h1>
            <p class="second-thanks-sentence">We will send proof of order to your email</p>
            <center><a href="{{route('index')}}" class="linkToHome">head back to home page</a></center>
        </div>
    </div>
</body>
</html>
