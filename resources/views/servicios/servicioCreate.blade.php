<x-template-servicio header="Crear Servicio">
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
</x-template-servicio>