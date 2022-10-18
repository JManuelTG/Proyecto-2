<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear</title>
</head>
<body>
    <h1>Crear</h1>
    <form action="/servicios" method="post">
        @csrf
        <label for="plataforma">Plataforma</label>
        <input type="text" name="plataforma">
        <br>
        <label for="juego">Juego</label>
        <input type="text" name="juego">
        <br>
        <label for="precio">Precio</label>
        <input type="text" name="precio">
        <br>
        <label for="descripcion">Descripcion</label>
        <input type="text" name="descripcion">
        <br>
        <input type="submit" value="Guardar">
    </form>
</body>
</html>