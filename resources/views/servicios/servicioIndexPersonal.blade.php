<x-template-servicio header="Tus Servicios">
    <table class="centered striped ">
        <thead>
            <tr>
                <th>ID</th>
                <th>Usuario</th>
                <th>Juego</th>
                <th>Plataforma</th>
                <th>Precio</th>
                <th>Descripcion</th>
                <th>Editar</th>
                <th>Eliminar</th>
                <th>Correo</th>
            </tr>
        </thead>
        @foreach($servicios as $servicio)
        <tbody>
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
                <td><a href="/servicios/{{$servicio->id}}/edit">Editar</a></td>
                <td>
                    <form action="/servicios/{{$servicio->id}}" method="post">
                        @csrf
                        @method('DELETE')
                        <input type="submit" value="Eliminar">
                    </form>
                </td>
                <th>
                    <a href="{{ route('servicios.envia-correo', $servicio) }}">Enviar Correo</a>
                </th>
            </tr>
        @endforeach
    </tbody>
    </table>
</x-template-servicio>
