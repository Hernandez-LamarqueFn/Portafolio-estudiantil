@extends('layout.app')

@section('title', 'Register')

@section('content')


<div>
    <h1>Registrar</h1>

    <form class="" method="POST" action="">
        @csrf

        <input type="text" name="name" id="name" placeholder="Nombre">
        
        <input type="email" name="email" id="email" placeholder="Correo">

        <select name="carrera" id="carrera">
            <option value="">Sistemas</option>
        </select>

        <input type="password" name="password" id="password" placeholder="Contraseña">

        <input type="password" name="password_confirm" id="password_confirm" placeholder="Confirmar Contraseña">

        <button type="submit" class="">Registrar</button>
    </form>

</div>
@endsection