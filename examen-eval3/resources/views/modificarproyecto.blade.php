@extends('layout')

@section('title')
    Modificar proyecto
@endsection

@section('content')
    <style>
        table, th, td{
            border: 1px solid black;
        }
    </style>
    <h1>Modificar proyecto</h1>


    <form action="{{route('proyectoupdate')}}" method="POST">
        @csrf
        Id del proyecto: {{ $proyecto[0]->id }}<br>
        título: <input type="text" name="titulo" id="titulo" placeholder="{{$proyecto[0]->titulo}}" required><br>
        descripcion: <input type="text" name="descripcion" id="descripcion" placeholder="{{$proyecto[0]->descripcion}}" required><br>
        url:<input type="text" name="url" id="url" placeholder="{{$proyecto[0]->url}}" required><br>

        <input type="hidden" name="id" id="id" value="{{$proyecto[0]->id}}">
        <input type="submit" name="modificar" id="modificar" value="Modificar proyecto">
    </form>
    <br>
    <hr>
    <br>
    <h1>Asignar estudiante</h1>
    <form action="{{ route('annadiralumnos') }}" method="POST">
        @csrf
        nombre: <input type="text" name="nombre" id="nombre" required>
        dni: <input type="text" name="dni" id="dni" required>
        <input type="hidden" name="proyecto_id" id="proyecto_id" value="{{$proyecto[0]->id}}">
        <input type="submit" value="Añadir estudiante al proyecto" name="annadir">
    </form>

    <table>
        <tr>
            <th>id</th>
            <th>nombre</th>
            <th>dni</th>
            <th>proyecto_id</th>
            <th>eliminar estudiante</th>
        </tr>
        @if (count($alumnos)>=0)
            @foreach($alumnos as $datos)
                <tr>
                    <td>{{ $datos->id }}</td>
                    <td>{{ $datos->nombre }}</td>
                    <td>{{ $datos->dni }}</td>
                    <td>{{ $datos->proyecto_id }}</td>
                    <td><a href="/eliminarestudiante/{{$datos->id}}">eliminar</a></td>
                </tr>
            @endforeach
        @endif
    </table>


<br><br><a href="/proyectos">Volver atrás</a>
@endsection
