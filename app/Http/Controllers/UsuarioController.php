<?php

namespace App\Http\Controllers;

use App\Models\usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function index()
    {
        $usuario = new Usuario();
        return $usuario->all();
    }

    public function store(Request $request)
    {
        $usuario = new Usuario();
        $usuario->nombre = $request->nombre;
        $usuario->apellido = $request->apellido;
        $usuario->correo_electronico = $request->correo_electronico;
        $usuario->fecha_registro = $request->fecha_registro;
        $usuario->save();
        return "Registro Guardado Correctamente";
    }

    public function show(string $id)
    {
        return Usuario::where('id',$id)->get();
    }

    public function update(Request $request, string $id)
    {
        $usuario = Usuario::find($id);
        $usuario->nombre = $request->nombre;
        $usuario->apellido = $request->apellido;
        $usuario->correo_electronico = $request->correo_electronico;
        $usuario->fecha_registro = $request->fecha_registro;
        $usuario->save();
        return $usuario;
    }

    public function destroy(string $id)
    {
        $usuario = Usuario::find($id);
        $usuario->delete();
        return "Eliminado correctamente";
    }
}
