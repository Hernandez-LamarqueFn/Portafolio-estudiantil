@extends('layout.app')

@section('title', 'Login')

@section('content')
<div>
<h1>Iniciar Sesion</h1>

<form class="" method="POST" action="">
    @csrf
    <input type="email" class="" id="email" name="email" placeholder="Email" >
    <input type="password" class="" name="password" id="password" placeholder="Password">

    @error('message')
            <!-- clase para poner comentarios -->
    <p class=" ">* Error</p>
    @enderror

    <button type="submit" class="">Enviar</button>
</form>

</div>
@endsection