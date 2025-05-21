<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registrar Usuario</title>
</head>
<body>
    <h1>Registrar Usuario</h1>
    <form action="/usuarios/nuevo" method="post">
        @csrf
        <label>Nombre: <input type="text" name="nombre"></label><br><br>
        <label>Apellido: <input type="text" name="apellido"></label><br><br>
        <label>Nickname: <input type="text" name="nickname"></label><br><br>
        <label>Fecha de nacimiento: <input type="date" name="fecha_nac"></label><br><br>
        <label>Nacionalidad: <input type="text" name="nacionalidad"></label><br><br>
        <button type="submit">Registrar</button>
    </form>
</body>
</html>
