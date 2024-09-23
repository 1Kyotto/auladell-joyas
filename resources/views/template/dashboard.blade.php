<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>Laravel</title>
        @vite('resources/css/app.css')

    </head>
    <body class="grid grid-cols-12 text-center bg-slate-500">
        {{--NAVBAR--}}
        <div class="col-span-12 bg-teal-500 sticky top-0 z-10 shadow-md">
            <div class="bg-slate-400 mx-16">
                navbar
            </div>

            <div class="border-b"></div>

            <div class="bg-slate-400 mx-16" id="navbar">
                navbar
            </div>
        </div>
        {{--NAVBAR--}}

        {{--SIDEBAR--}}
        <div class="col-span-3 bg-red-400 pl-16">
            SIDEBAR
        </div>
        {{--SIDEBAR--}}
        
        {{--CONTENIDO--}}
        @yield('contenido')
        {{--CONTENIDO--}}

        {{--FOOTER--}}
        <footer class="col-span-12 bg-cyan-600 grid grid-cols-3 border-t">
            <div class="col-span-3 grid grid-cols-3 mx-16 bg-slate-400">
                <div class="col-span-1 text-center">
                    Redes sociales
                </div>
                <div class="col-span-1 text-center">
                    Informacion
                </div>
                <div class="col-span-1 text-center">
                    Servicio al cliente
                </div>
            </div>
        </footer>
        {{--FOOTER--}}

        {{--SOMBRA NAVBAR--}}
        <script>
            window.addEventListener('scroll', () => {
                const navbar = document.getElementById('navbar');
                if (window.scrollY > 0) {
                    navbar.classList.add('shadow-md'); // Agrega sombra
                } else {
                    navbar.classList.remove('shadow-md'); // Quita sombra
                }
            });
        </script>
        {{--SOMBRA NAVBAR--}}
    </body>
</html>