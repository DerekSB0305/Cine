<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @extends('layouts.app')
@section('content')
    <title>Peliculas</title>
</head>

<body>
    <h1>Peliculas Administrador</h1>
    <a href="/admin/peliculas/crear">Crear Pelicula</a>
    <table class="shadow-2xl table-auto border-separate border border-slate-400">
        <tr>
            <th class="border border-slate-800">Titulo</th>
            <th class="border border-slate-800">genero</th>
            <th class="border border-slate-800">duración</th>
            <th class="border border-slate-800">Clasificación</th>
            <th class="border border-slate-800">Sinopsis</th>
            <th class="border border-slate-800">imagen</th>
            <th class="border border-slate-800">Acciones</th>
        </tr>

        <tbody>
            @foreach ($movies as $movie)
            <tr>
                <td class="border border-slate-800">{{$movie->title}}</td>
                <td class="border border-slate-800">{{$movie->genre->name ?? 'Sin género' }}</td>
                <td class="border border-slate-800">{{$movie->duration}}</td>
                <td class="border border-slate-800">{{$movie->classification->name ?? 'Sin género'}}</td>
                <td class="border border-slate-800">{{$movie->synopsis}}</td>
                <td>
                    @if ($movie->image_url)
                    <img src="{{ asset('storage/' . str_replace('public/', '', $movie->image_url)) }}" alt="{{ $movie->title }}" width="100">
                    @else
                    <span>Sin imagen</span>
                    @endif
                </td>

                <td>
                    <a href="/admin/peliculas/{{ 
                    $movie->id}}/editar"> Editar</a>
                    <form action="/admin/peliculas/{{
                    $movie->id}}" method="POST">
                        @csrf
                        @method('delete')
                        <button type="submit">Eliminar</button>
                    </form>
                    <!-- <a href="/admin/peliculas/{{ 
                    $movie->id}}/delete">Eliminar</a> -->
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
@endsection