<a href="/servicios">Index</a>
<x-template-servicio header="Mostrar Servicio">
    <h2>Servicio: {{ $servicio->id }}</h2>
    <table border="1">
        <tr>
            <th>Usuario</th>
            <th>Juego</th>
            <th>Plataforma</th>
            <th>Precio</th>
            <th>Descripcion</th>
            <th>Editar</th>
            <th>Eliminar</th>
        </tr>
        <tr>
            <td>{{ $servicio->user->name }}</td>
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
</x-template-servicio>