<form method="get" action="/usuarios/buscar">
    <input type="text" name="q" placeholder="Buscar...">
    <button type="submit">Buscar</button>
</form>

<ul>
    @foreach($usuarios as $usuario)
        <li>{{ $usuario->nombre }} {{ $usuario->apellido }} - {{ $usuario->nickname }}</li>
    @endforeach
</ul>
