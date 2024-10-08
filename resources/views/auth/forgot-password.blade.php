@extends('template.master')

@section('contenido')
{{--Container--}}
<div class="col-span-6 grid grid-cols-3 min-h-[calc(100vh-80px)] font-secundario w-full bg-[#608a78]">
    <div class="col-span-1 col-start-2 flex flex-col justify-center items-center relative z-10">
        {{--Mensaje--}}
        <h4 class="font-primario text-6xl mb-8">¿Te olvidaste de tu contraseña?</h4>
        <p class="w-full text-start mb-8 leading-7">No te preocupes.
            <br>
            Ingresa el correo asociado a tu cuenta y te enviaremos un enlace para reestablecer tu contraseña.
        </p>
        {{--Mensaje--}}

        {{--Sección de mensajes de éxito--}}
        @if (session('status'))
            <div class="bg-green-500 text-white p-4 rounded mb-4 w-full">
                {{ session('status') }}
            </div>
        @endif
        {{--Sección de mensajes de éxito--}}

        {{--Sección de login--}}
        <div class="flex flex-col items-center">
            {{--Form de login--}}
            <form method="POST" action="{{ route('password.email') }}" class="flex flex-col items-start">
                @csrf

                {{--Mostrar mensajes de error--}}
                @if ($errors->any())
                <div class="bg-color-secondary text-white p-4 rounded mb-4 w-full">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                {{--Mostrar mensajes de error--}}

                <div class="">
                    {{--Email--}}
                    <label for="email" class="mb-2 text-lg">Introduzca su correo</label>
                    <input id="email" class="outline-none w-full mb-3 bg-transparent border-b-2 placeholder-gray-900" placeholder="Correo Electrónico" type="text" name="email" value="{{ old('email') }}" autofocus>
                    {{--Email--}}
    
                    {{--Enlaces y botón--}}
                    <div class="w-full flex flex-col items-center">        
                        <button type="submit" class="border-2 min-w-16 py-3 px-6 rounded-full text-aux bg-color-primary hover:bg-color-secondary my-6">
                            Enviar
                        </button>
                    </div>
                    {{--Enlaces y botón--}}
                </div>
            </form>
            {{--Form de login--}}
        </div>
        {{--Sección de login--}}
    </div>
</div>
{{--Container--}}
@endsection