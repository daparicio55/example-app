<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Biblioteca</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <div class="min-h-screen flex"> <!-- Contenedor principal -->
        <div class="w-75 bg-cyan-950"><!-- sidebar -->
            <div class="text-white flex p-3 items-center gap-2"><!-- logo -->
                <div class="bg-cyan-700 rounded-lg p-3">
                    <i class="fa-solid fa-user-gear"></i>
                </div> Panel Administrador
            </div><!-- fin del logo -->
            <div class="pl-6 mt-4"> <!-- menú del sidebar -->
                @include('layouts.partials.menu')
            </div><!-- fin del menú del sidebar -->
        </div><!-- fin del sidebar -->
        <div class="flex-1 bg-slate-100"><!-- contenido principal -->
            <div class="bg-slate-200 p-4 flex justify-between items-center px-4"><!-- encabezado del contenido principal -->
                <div>
                    Sistema de Gestion de Biblioteca | <span class="font-bold text-lg">@yield('subtitulo')</span>
                </div>
                <div><!-- boton de crear -->
                    @yield('boton-crear')
                </div><!-- fin del boton de crear -->
            </div><!-- fin del encabezado del contenido principal -->
            <div class="p-5"><!-- contenido del contenido principal -->
                @yield('contenido')
            </div><!-- fin del contenido del contenido principal -->
        </div><!-- fin del contenido principal -->
    </div> <!-- fin del contenedor principal -->
</body>
</html>