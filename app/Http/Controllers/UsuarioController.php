<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;

class UsuarioController extends Controller
{
    // Mostrar el formulario de registro
    public function formulario()
    {
        return view('formulario_usuario');
    }

    // Registrar un nuevo usuario
    public function registrar(Request $request)
    {
        $usuario = Usuario::create([
            'nombre' => $request->nombre,
            'apellido' => $request->apellido,
            'nickname' => $request->nickname,
            'fecha_nac' => $request->fecha_nac,
            'nacionalidad' => $request->nacionalidad
        ]);

        return response()->json([
            'mensaje' => 'Usuario registrado con éxito',
            'usuario' => $usuario
        ]);
    }

    // Listar todos los usuarios
    public function listar()
    {
        $usuarios = Usuario::all();

        return response()->json([
            'usuarios' => $usuarios
        ]);
    }

    // Buscar usuarios por atributos
    public function buscar($campo, $valor)
    {
        if (!in_array($campo, ['nombre', 'apellido', 'nickname', 'nacionalidad'])) {
            return response()->json([
                'error' => 'Campo no permitido para búsqueda'
            ], 400);
        }

        $usuarios = Usuario::where($campo, 'like', "%$valor%")->get();

        return response()->json([
            'resultado' => $usuarios
        ]);
    }
}
