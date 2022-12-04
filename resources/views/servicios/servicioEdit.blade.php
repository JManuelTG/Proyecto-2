<x-template-servicio header="Editar Servicio">
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
</x-template-servicio>