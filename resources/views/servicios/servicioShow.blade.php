<x-template-servicio header="Mostrar Servicio">
    <h2>Servicio: {{ $servicio->id }}</h2>
    <table class="centered striped ">
        <thead>
            <tr>
                <th>Usuario</th>
                <th>Juego</th>
                <th>Plataforma</th>
                <th>Precio</th>
                <th>Descripcion</th>
                <th>Editar</th>
                <th>Eliminar</th>
            </tr>
        </thead>
        <tbody>
            <tr>
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
        </tbody>
    </table>
</x-template-servicio>
