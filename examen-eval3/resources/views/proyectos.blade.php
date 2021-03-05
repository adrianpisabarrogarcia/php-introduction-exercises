@extends('layout')

@section('title')
    Proyectos
@endsection

@section('content')
    <style>
        table, th, td{
            border:1px solid black;
        }
    </style>
    <h1>Proyectos</h1>

    <form action="{{route('proyectosannadir')}}" method="POST">
        @csrf
        <label for="titulo"> titulo: </label><input type="text" name="titulo" id="titulo" required>
        <label for="descripcion"> descripcion: </label><input type="text" name="descripcion" id="descripcion" required>
        <label for="url"> url: </label><input type="text" name="url" id="url" required>
        <input type="submit" name="enviar" id="titulo" value="Añadir proyecto">

    </form>

    <table>
        <tr>
            <th>id</th>
            <th>titulo</th>
            <th>descripción</th>
            <th>url</th>
            <th>modificar</th>
            <th>eliminar</th>
        </tr>
        @if (count($proyectos)>=0)
            @foreach($proyectos as $datos)
                <tr>
                    <td>{{ $datos->id }}</td>
                    <td>{{ $datos->titulo }}</td>
                    <td>{{ $datos->descripcion }}</td>
                    <td><a href="{{$datos->url}}">{{$datos->url}}</a></td>
                    <td><a href="/modificar/{{$datos->id}}">Modificar</a></td>
                    <td><a href="/eliminar/{{$datos->id}}">Eliminar</a></td>
                </tr>
            @endforeach
        @endif
    </table>
@endsection
