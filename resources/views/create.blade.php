<form action="/usuarios" method="post">
    @csrf
    <label>Nombre: <input type="text" name="nombre"></label><br>
    <label>Apellido: <input type="text" name="apellido"></label><br>
    <label>Nickname: <input type="text" name="nickname"></label><br>
    <label>Fecha Nacimiento: <input type="datetime-local" name="fecha_nac"></label><br>
    <label>Nacionalidad: <input type="text" name="nacionalidad"></label><br>
    <button type="submit">Guardar</button>
</form>
