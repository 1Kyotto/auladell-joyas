@extends('template.master')

@section('contenido')
{{--Container--}}
<div class="col-span-6 grid grid-cols-3 min-h-[calc(100vh-80px)] font-secundario w-full bg-[#608a78]">
    <div class="col-span-1 col-start-2 flex flex-col justify-center items-center relative z-10">
        {{--Mensaje--}}
        <p class="font-primario text-6xl mb-8">Hola, un gusto verte de nuevo</p>
        {{--Mensaje--}}

        {{--Sección de login--}}
        <div class="flex flex-col items-center">
            {{--Form de login--}}
            <form method="POST" action="{{ route('login') }}" class="flex flex-col items-start">
                @csrf
                {{--Email--}}
                <input id="email" class="outline-none w-full mb-3 bg-transparent border-b-2 placeholder-gray-900" placeholder="Correo Electrónico" type="email" name="email" value="{{ old('email') }}" required autofocus>
                {{--Email--}}
                
                {{--Contraseña--}}
                <input id="password" class="outline-none w-full mb-2 bg-transparent border-b-2 placeholder-gray-900" placeholder="Contraseña" type="password" name="password" required autocomplete="current-password">
                {{--Contraseña--}}

                {{--Recuérdame--}}
                <div class="">
                    <label for="remember_me" class="">
                        <input id="remember_me" type="checkbox" class="" name="remember">
                        <span class="hover:text-secondary">Recordarme</span>
                    </label>
                </div>
                {{--Recuérdame--}}

                {{--Enlaces y botón--}}
                <div class="w-full flex flex-col items-center">        
                    <button type="submit" class="border-2 min-w-16 py-3 px-6 rounded-full text-aux bg-color-primary hover:bg-color-secondary my-6">
                        Iniciar Sesión
                    </button>
                    <div class="flex justify-between items-center gap-40 font-semibold text-md">
                        <a href="{{ route('password.request') }}" class="hover:text-secondary">
                            ¿Olvidaste tu contraseña?
                        </a>
                        <a href="{{ route('register') }}" class="hover:text-secondary">
                            Registrarse
                        </a>
                    </div>
                </div>
                {{--Enlaces y botón--}}
            </form>
            {{--Form de login--}}
        </div>
        {{--Sección de login--}}
    </div>
</div>
{{--Container--}}
@endsection