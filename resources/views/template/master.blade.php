<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        @vite('resources/css/app.css')

    </head>
    <body class="grid grid-cols-6 text-center">
        <div class="nav col-span-6 bg-teal-500 grid grid-rows-2">
            <div class="nav-1 row-span-1 pt-4">
                <div class="grid grid-cols-3 gap-3">
                    <div>01</div>
                    <div>02</div>
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
            </div>
            <hr class="w-screen border-t-2 border-black my-1">
            <div class="nav-2 row-span-1 pb-4">
                <div class="grid grid-cols-6 gap-3">
                    <div>04</div>
                    <div>05</div>
                    <div>06</div>
                    <div>07</div>
                    <div>08</div>
                    <div>09</div>
                </div>
            </div>
        </div>

        @yield('contenido')

        <footer class="col-span-6 bg-cyan-600 grid grid-cols-3">
			        <div class="col-span-1 text-center">
                Redes sociales
              </div>
              <div class="col-span-1 text-center">
                Informacion
              </div>
              <div class="col-span-1 text-center">
                Servicio al cliente
              </div>
	    </footer>
    <script src="https://cdn.jsdelivr.net/npm/flowbite@1.6.5/dist/flowbite.min.js"></script>
    </body>
</html>