<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        @vite('resources/css/app.css')

    </head>
    <body class="grid grid-cols-12 text-center h-screen">
        <div class="col-span-2 bg-blue-600">
            SIDEBAR
        </div>
        <div class="col-span-10 grid grid-cols-4 grid-rows-12 bg-orange-600">
            <div class="bg-teal-400 row-span-2 col-span-4 grid grid-cols-9 grid-rows-2">
                <div class="row-span-1 grid grid-cols-3 col-span-9 border-b border-black">
                    <div class="">01</div>
                    <div class="">02</div>
                    <div>
                        @auth
                        <p>Bienvenido, {{ Auth::user()->name }}!</p>
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button type="submit">Cerrar Sesión</button>
                        </form>
                        @endauth
                        
                        @guest
                            <a href="{{ route('login') }}">Iniciar Sesión</a>
                        @endguest
                    </div>
                </div>

                <div class="row-span-1 grid grid-cols-6 col-span-9">
                    <div class="">04</div>
                    <div class="">05</div>
                    <div class="">06</div>
                    <div class="">07</div>
                    <div class="">08</div>
                    <div class="">09</div>
                </div>
            </div>
            @yield('contenido')
        </div>
    </body>
</html>