<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\usuario;

class UsuarioController extends Controller
{
    public function index()
    {
        $usuarios = \App\Models\usuario::all();
        return view('usuarios.index', compact('usuarios'));
    }

    public function create()
    {
        return view('client.Register');
    }

    public function store(Request $request)
    {
        Usuario::create($request->all());
        return redirect()->route('mainClient')->with('success', 'Usuario registrado exitosamente.');
    }
}
