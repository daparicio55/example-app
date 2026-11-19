<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="min-h-screen flex items-center justify-center bg-gray-200">
    <form method="POST" action="{{ route('login') }}" class="shadow rounded-lg bg-white p-5 flex gap-5 flex-col">
        @csrf
        <div class="bg-gray-400 text-white p-3 text-center rounded"><!-- header -->
            <h1 class="text-2xl font-bold">Login</h1>
            <div class="flex justify-center p-4">
                <i class="fas fa-user-circle text-4xl"></i>
            </div>
        </div>
        <div class="text-2xl"><!-- body -->
            <div class="flex flex-col gap-2">
                <label>Ingrese su email</label>
                <input type="text" name="email" placeholder="Email" class="border p-2 rounded">
                @error('email')
                    <div class="text-red-500 text-sm">{{ $message }}</div>
                @enderror
            </div>
            <div class="flex flex-col gap-2">
                <label>Ingrese su contraseña</label>
                <input type="password" name="password" placeholder="Password" class="border p-2 rounded">
                @error('password')
                    <div class="text-red-500 text-sm">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="flex justify-end"><!-- footer -->
            <button type="submit" class="text-lg bg-blue-500 text-white px-5 py-1 rounded">Login</button>
        </div>
    </form>
</body>
</html>