@extends('template.master')

@section('contenido')
{{--Container--}}
<div class="col-span-6 grid grid-cols-3 min-h-[calc(100vh-80px)] font-secundario w-full bg-[#608a78]">
    <div class="col-span-1 col-start-2 flex flex-col justify-center items-center relative z-10">
        {{--Mensaje--}}
        <p class="font-primario text-6xl mb-8">Cambio de Contraseña</p>
        {{--Mensaje--}}

        {{--Mensaje de éxito--}}
        @if (session('status'))
            <div class="bg-green-500 text-white p-4 rounded mb-4">
                {{ session('status') }}
            </div>
        @endif
        {{--Mensaje de éxito--}}

        {{--Mostrar mensajes de error--}}
        @if ($errors->any())
            <div class="bg-red-500 text-white p-4 rounded mb-4 w-full">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        {{--Mostrar mensajes de error--}}

        {{--Sección de login--}}
        <div class="flex flex-col items-center">
            {{--Form de login--}}
            <form method="POST" action="{{ route('password.update') }}" class="flex flex-col items-start gap-4">
                @csrf

                <input type="hidden" name="token" value="{{ $token }}">

                {{--Email--}}
                <div class="w-full">
                    <input id="email" class="outline-none w-full mb-3 bg-transparent border-b-2 placeholder-gray-900" placeholder="Correo Electrónico" type="email" name="email" value="{{ request()->email }}" readonly>
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

                {{--Enlaces y botón--}}
                <div class="w-full flex flex-col items-center">        
                    <button type="submit" class="border-2 min-w-16 py-3 px-6 rounded-full text-aux bg-color-primary hover:bg-color-secondary my-6">
                        Cambiar Contraseña
                    </button>
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



@extends('template.master')

@section('contenido')
<div class="">
    <form action="{{ route('password.update') }}" method="POST">
        @csrf
        <input type="hidden" name="token" value="{{ $token }}">

        {{--Email--}}
        <div class="">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" value="{{ request()->email }}" readonly>
            @error('email')
                <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>
        {{--Email--}}

        {{--Nueva Contraseña--}}
        <div class="">
            <label for="password">Nueva Contraseña</label>
            <input type="password" name="password">
            @error('password')
                <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>
        {{--Nueva Contraseña--}}

        {{--Confirmar Contraseña--}}
        <div class="">
            <label for="password_confirmation">Confirmar Nueva Contraseña</label>
            <input type="password" name="password_confirmation">
            @error('password_confirmation')
                <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>
        {{--Confirmar Contraseña--}}

        {{--Botón para cambiar contraseña--}}
        <div class="">
            <button type="submit">Cambiar Contraseña</button>
        </div>
        {{--Botón para cambiar contraseña--}}

    </form>
</div>
@endsection