<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User-profile</title>
</head>
<body>

<h1>Information about the User</h1>

    <p>ID: {{$user->id}}</p>
    <p>Username: {{$user->name}}</p>
    <p>Your e-mail: {{$user->email}}</p>
    <p>Your password: {{$user->password}}</p>

    <a href="{{url('/home')}}">Return</a>

</body>
</html>
