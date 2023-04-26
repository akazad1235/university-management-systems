
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="POST" action="{{ route('super.admin.login') }}">
    @csrf
    <input type="text" name="email" placeholder="name">
    <input type="passowrd" name="password">
    <button type="submit">submit</button>
</form>
</body>
</html>
