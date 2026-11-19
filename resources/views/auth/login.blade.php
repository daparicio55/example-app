<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <input type="text" name="email" placeholder="Email">
        @error('email')
            <div>{{ $message }}</div>
        @enderror
        <input type="password" name="password" placeholder="Password">
        @error('password')
            <div>{{ $message }}</div>
        @enderror
        <button type="submit">Login</button>
    </form>
</body>
</html>