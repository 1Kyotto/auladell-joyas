<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>Auladell Joyas</title>
        @vite('resources/css/app.css')

    </head>
    <body class="grid grid-cols-6 text-center bg-primario">
        {{--NAVBAR--}}
        <div class="bg-primary col-span-6 sticky top-0 z-10 shadow-md">
            <div class="mx-16 flex items-center justify-between py-2">
                <a href="{{ route('home.index') }}" class="flex items-center justify-between gap-4">
                    <img class="h-10" src="{{ asset('images/logo.png') }}" alt="logo-auladelljoyas"></img>
                    <h2 class="font-cinzel font-medium text-2xl text-primary">AULADELL JOYAS</h2>
                </a>
                <div class="flex items-center gap-3">
                    <input type="text" placeholder="Search..">
                    <a href="{{ route('login') }}" class="">
                        <svg viewBox="-0.5 -0.5 16 16" fill="none" xmlns="http://www.w3.org/2000/svg" id="User-Circle--Streamline-Solar-Ar" height="20" width="20"><desc>User Circle Streamline Icon: https://streamlinehq.com</desc><path stroke="#000000" d="M5.4488125 5.4488125C5.4488125 7.0278125000000005 7.158125 8.014687499999999 8.5255625 7.2251875C9.1601875 6.8588125 9.551187500000001 6.1816249999999995 9.551187500000001 5.4488125C9.551187500000001 3.869875 7.841875 2.883 6.4744375 3.6725000000000003C5.8398125 4.038875 5.4488125 4.716 5.4488125 5.4488125" stroke-width="1"></path><path stroke="#000000" d="M0.6628125 7.5C0.6628125 12.7633125 6.3604375 16.0528125 10.918624999999999 13.4211875C13.034062500000001 12.199875 14.337187499999999 9.9426875 14.337187499999999 7.5C14.337187499999999 2.2366875 8.6395625 -1.0528125000000002 4.0813749999999995 1.5788125C1.9659375000000001 2.800125 0.6628125 5.0573125 0.6628125 7.5" stroke-width="1"></path><path d="M11.58125 12.96975C11.4725 10.9928125 10.8671875 9.551187500000001 7.5 9.551187500000001C4.132874999999999 9.551187500000001 3.5275625 10.9928125 3.4187499999999997 12.96975" stroke="#000000" stroke-linecap="round" stroke-width="1"></path></svg>
                    </a>
                    <a href="{{ route('cart.index') }}" class="">
                        <svg viewBox="-0.5 -0.5 16 16" fill="none" xmlns="http://www.w3.org/2000/svg" id="Bag-Smile--Streamline-Solar-Ar" height="20" width="20"><desc>Bag Smile Streamline Icon: https://streamlinehq.com</desc><path d="M1.6158125 7.879375C2.001 5.9535 2.193625 4.9905 2.8299999999999996 4.3703125C2.947625 4.255625 3.0748750000000005 4.1513125 3.2103124999999997 4.0584999999999996C3.9433125 3.5561249999999998 4.925375 3.5561249999999998 6.8894375 3.5561249999999998H8.1105625C10.074625 3.5561249999999998 11.056687499999999 3.5561249999999998 11.7896875 4.0584999999999996C11.925125000000001 4.1513125 12.0524375 4.255625 12.170000000000002 4.3703125C12.806437500000001 4.9905 12.999 5.9535 13.3841875 7.879375C13.937187499999999 10.644437499999999 14.2136875 12.026937499999999 13.5771875 13.006625C13.461875000000001 13.184000000000001 13.327375 13.3480625 13.1760625 13.495875C12.34025 14.3121875 10.9303125 14.3121875 8.1105625 14.3121875H6.8894375C4.069625 14.3121875 2.6597500000000003 14.3121875 1.8239375 13.495875C1.672625 13.3480625 1.5380625 13.184000000000001 1.4228125 13.006625C0.7863125 12.026937499999999 1.0628125 10.644437499999999 1.6158125 7.879375Z" stroke="#000000" stroke-width="1"></path><path d="M5.34875 3.5561249999999998V2.839C5.34875 1.6509375000000002 6.311875000000001 0.6878125 7.5 0.6878125S9.6511875 1.6509375000000002 9.6511875 2.839V3.5561249999999998" stroke="#000000" stroke-linecap="round" stroke-width="1"></path><path d="M5.4713125 10.00975C5.7666249999999994 10.845312499999999 6.5634999999999994 11.443874999999998 7.500125 11.443874999999998S9.2336875 10.845312499999999 9.5289375 10.00975" stroke="#000000" stroke-linecap="round" stroke-width="1"></path></svg>
                    </a>
                </div>
            </div>

            <div class="border-b border-gray-600"></div>

            <div class="bg-primary mx-16 flex items-center justify-start gap-12 py-4 font-fauna" id="navbar">
                <a href="{{ route('joyas.index', ['type' => 'personaliza']) }}">Personaliza</a>
                <a href="{{ route('joyas.index', ['type' => 'aros']) }}">Aros</a>
                <a href="{{ route('joyas.index', ['type' => 'anillos']) }}">Anillos</a>
                <a href="{{ route('joyas.index', ['type' => 'brazaletes']) }}">Brazaletes</a>
                <a href="{{ route('joyas.index', ['type' => 'collares']) }}">Collares</a>
            </div>
        </div>
        {{--NAVBAR--}}
        
        {{--CONTENIDO--}}
        @yield('contenido')
        {{--CONTENIDO--}}

        {{--FOOTER--}}
        <footer class="col-span-6 bg-cyan-600 grid grid-cols-3 border-t">
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

        <script src="https://cdn.jsdelivr.net/npm/flowbite@1.6.5/dist/flowbite.min.js"></script>
    </body>
</html>