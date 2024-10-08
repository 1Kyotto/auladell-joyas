@extends('template.master')

@section('contenido')
{{--Container--}}
<div class="col-span-6 grid grid-cols-3 min-h-[calc(100vh-80px)] font-secundario w-full bg-[#608a78]">
    <div class="col-span-1 col-start-2 flex flex-col justify-center items-center relative z-10">
        {{--Mensaje--}}
        <p class="font-primario text-6xl mb-8">Registro de Usuario</p>
        {{--Mensaje--}}

        {{--Sección de login--}}
        <div class="flex flex-col items-center">
            {{--Form de login--}}
            <form method="POST" action="{{ route('register') }}" class="flex flex-col items-start gap-4">
                @csrf

                {{--Nombre--}}
                <div class="w-full">
                    <input id="name" class="outline-none w-full bg-transparent border-b-2 placeholder-gray-900" placeholder="Nombre" type="text" name="name" value="{{ old('name') }}" autofocus>
                    @error('name')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>
                {{--Nombre--}}

                {{--Email--}}
                <div class="w-full">
                    <input id="email" class="outline-none w-full mb-3 bg-transparent border-b-2 placeholder-gray-900" placeholder="Correo Electrónico" type="email" name="email" value="{{ old('email') }}" autofocus>
                    @error('email')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>
                {{--Email--}}

                {{--Contraseña--}}
                <div class="w-full">
                    <input id="password" class="outline-none w-full mb-2 bg-transparent border-b-2 placeholder-gray-900" placeholder="Contraseña" type="password" name="password">
                    @error('password')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>
                {{--Contraseña--}}

                {{--Confirmar Contraseña--}}
                <div class="w-full">
                    <input id="password_confirmation" class="outline-none w-full mb-2 bg-transparent border-b-2 placeholder-gray-900" placeholder="Confirmar Contraseña" type="password" name="password_confirmation">
                    @error('password_confirmation')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>
                {{--Confirmar Contraseña--}}

                {{--Teléfono--}}
                <div class="w-full">
                    <input id="phone" class="outline-none w-full bg-transparent border-b-2 placeholder-gray-900" placeholder="Teléfono" type="text" name="phone" value="{{ old('phone') }}">
                    @error('phone')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>
                {{--Teléfono--}}

                {{--Enlaces y botón--}}
                <div class="w-full flex flex-col items-center">        
                    <button type="submit" class="border-2 min-w-16 py-3 px-6 rounded-full text-aux bg-color-primary hover:bg-color-secondary my-6">
                        Registrarse
                    </button>
                    <div class="items-center font-semibold text-md">
                        <span class="mr-2">¿Ya tienes una cuenta?</span>
                        <a href="{{ route('login') }}" class="hover:text-secondary">
                            Inicia Sesión
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