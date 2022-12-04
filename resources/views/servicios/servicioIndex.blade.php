<x-template-servicio header="Listado de Servicios">
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Usuario</th>
            <th>Juego</th>
            <th>Plataforma</th>
            <th>Precio</th>
            <th>Descripcion</th>
            <th>Editar</th>
            <th>Eliminar</th>
        </tr>
        @foreach($servicios as $servicio)
            <tr>
                <td>
                    <a href=" /servicios/{{$servicio->id}}">
                        {{ $servicio->id }}
                    </a>
                </td>
                <td>{{ $servicio->user->name }}</td>
                <td>{{ $servicio->juego }}</td>
                <td>{{ $servicio->plataforma }}</td>
                <td>{{ $servicio->precio }}</td>
                <td>{{ $servicio->descripcion }}</td>
                <td>
                    @can('update', $servicio)
                    <a href="/servicios/{{$servicio->id}}/edit">Editar</a>
                    @endcan
                </td>
                <td>
                    @can('delete', $servicio)
                    <form action="/servicios/{{$servicio->id}}" method="post">
                        @csrf
                        @method('DELETE')
                        <input type="submit" value="Eliminar">
                    </form>
                    @endcan
                </td>
            </tr>
        @endforeach
    </table>
</x-template-servicio>

