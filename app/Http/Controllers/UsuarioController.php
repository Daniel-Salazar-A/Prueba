<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\usuario;
use Illuminate\Support\Facades\Log;

class UsuarioController extends Controller
{
    public function index()
    {
        $usuarios = usuario::all();
        Log::info('Usuarios obtenidos: ' . $usuarios->count());
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
