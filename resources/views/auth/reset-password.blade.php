@extends('template.master')

@section('contenido')
<div class="">
    <form action="{{ route('password.update') }}" method="POST">
        @csrf
        <input type="hidden" name="token" value="{{ $token }}">

        <!-- Email -->
        <div class="">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" value="{{ request()->email }}" readonly>
        </div>

        <!-- Nueva Contraseña -->
        <div class="">
            <label for="password">Nueva Contraseña</label>
            <input type="password" name="password" required>
        </div>

        <!-- Confirmar Contraseña -->
        <div class="">
            <label for="password_confirmation">Confirmar Nueva Contraseña</label>
            <input type="password" name="password_confirmation" required>
        </div>

        <!-- Botón para cambiar contraseña -->
        <div class="">
            <button type="submit">Cambiar Contraseña</button>
        </div>
    </form>
</div>
@endsection