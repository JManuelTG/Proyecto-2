<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
</head>
<body>
<h1>Crear</h1>
    <form action="/servicios/{{$servicio->id}}" method="post">
        @csrf
        @method('patch')
        <label for="plataforma">Plataforma</label>
        <input type="text" name="plataforma" value="{{$servicio->plataforma}}">
        <br>
        <label for="juego">Juego</label>
        <input type="text" name="juego" value="{{$servicio->juego}}">
        <br>
        <label for="precio">Precio</label>
        <input type="text" name="precio" value="{{$servicio->precio}}">
        <br>
        <label for="descripcion">Descripcion</label>
        <input type="text" name="descripcion" value="{{$servicio->descripcion}}">
        <br>
        <input type="submit" value="Guardar">
    </form>
</body>
</html>