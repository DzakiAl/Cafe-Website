<!DOCTYPE html>
<html>
<head>
    <title>Cafe Name Reservation Proof</title>
</head>
<body>
    <h1>Cafe Name</h1>
    <h2>Reservation Proof</h2>
    <p><strong>Name:</strong> {{ $details['name'] }}</p>
    <p><strong>Email:</strong> {{ $details['email'] }}</p>
    <p><strong>Phone:</strong> {{ $details['phone'] }}</p>
    <p><strong>Number of peoples:</strong> {{ $details['people'] }}</p>
    <p><strong>Time:</strong> {{ $details['time'] }}</p>
    <p>After you receive this email, show it to cafe employee to proof that you are booking a table.</p>
    <p>Ignore if you are not booking.</p>
</body>
</html>