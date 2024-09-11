@extends('template.master')

@section('contenido')
<div class="">
    <form action="{{ route('password.email') }}" method="POST">
        @csrf
        <div class="">
            <label for="email">Email</label>
            <input type="email" name="email">
        </div>
        <div class="">
            <button>
                send
            </button>
        </div>
    </form>
</div>
@endsection