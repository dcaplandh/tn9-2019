<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lista de Peliculas</title>
</head>
<body>
    @forelse($peliculas as $pelicula)
   
{{$pelicula->title}} - {{$pelicula->genre->name ?? 'Sin genero'}} - <a href="/movies/edit/{{$pelicula->id}}">Editar</a> - <a href="/movies/destroy/{{$pelicula->id}}">Eliminar</a>
    <br>
    Los actores son:
    <ul>
        @forelse($pelicula->actors as $actor)
    <li>{{$actor->first_name}} {{$actor->last_name}} - Su peli favorita es {{$actor->favorite_movie->title ?? 'Sin peli favorita'}}</li>
        @empty
        No tiene actores.
        @endforelse
    </ul>
<br><br><br>
    @empty
        No hay peliculas en la base de datos.
    @endforelse

    <a href="/movies/create">Nueva pelicula</a>
</body>
</html>