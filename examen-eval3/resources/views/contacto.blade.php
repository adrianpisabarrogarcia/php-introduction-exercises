@extends('layout')

@section('title')
    Contacto
@endsection

@section('content')
    <h1>Contacto</h1>
    <form action="{{route('enviocontacto')}}" method="POST">
        @csrf
        <label for="nombre">Nombre: </label>
        <input type="text" name="nombre" id="nombre" required><br>
        <label for="mail">Correo electrónico: </label>
        <input type="email" name="mail" id="mail" required><br>
        <label for="mensaje">Mensaje: </label>
        <textarea name="mensaje" id="mensaje" required></textarea>
        <br>
        <input type="submit" name="enviar" id="enviar">
    </form>
@endsection
