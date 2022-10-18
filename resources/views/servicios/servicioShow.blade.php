<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Info Servicio</title>
</head>
<body>
    <a href="/servicios">Index</a>
    <h1>Servicio</h1>
    <h2>Servicio: {{ $servicio->id }}</h2>
    <table border="1">
        <tr>
            <th>Juego</th>
            <th>Plataforma</th>
            <th>Precio</th>
            <th>Descripcion</th>
            <th>Editar</th>
            <th>Eliminar</th>2
        </tr>
        <tr>
            <td>{{ $servicio->juego }}</td>
            <td>{{ $servicio->plataforma }}</td>
            <td>{{ $servicio->precio }}</td>
            <td>{{ $servicio->descripcion }}</td>
            <td>
                <a href="/servicios/{{$servicio->id}}/edit">Editar</a>
            </td>
            <td>
                 <form action="/servicios/{{$servicio->id}}" method="post">
                    @csrf
                    @method('DELETE')
                    <input type="submit" value="Eliminar">
                </form>
                    
            </td>
        </tr>
    </table>

</body>
</html>