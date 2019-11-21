<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edita la pelicula</title>
</head>
<body>
       
    <form action="" method="POST">
        @csrf 
        Titulo:
        <input type="text" name="title" value="{{old('title') ?? $pelicula->title}}">
    <span style="color:red;font-size:9px;">{{$errors->first('title')}}</span>
        <br>
        Rating:
        <input type="text" name="rating" value="{{old('rating') ?? $pelicula->rating}}">
        <span style="color:red;font-size:9px;">{{$errors->first('rating')}}</span>
        <br>
        Premios:
        <input type="text" name="awards" value="{{old('awards') ?? $pelicula->awards}}">
        <span style="color:red;font-size:9px;">{{$errors->first('awards')}}</span>
        <br>
        <button type="submit">Guardar Cambios</button>
        

    </form>
</body>
</html>