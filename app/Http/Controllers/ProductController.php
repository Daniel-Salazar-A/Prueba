<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;

class ProductController extends Controller
{
    public function index(){
        $productos = Producto::all();

        return view('Client.main', compact('productos'));
    }

    public function create(Request $request){
        return view('Admin.Create');
    }

    public function store(Request $request){
        Producto::create($request->all());
        return redirect()->route('mainClient')->with('success', 'Producto creado exitosamente');
    }

    public function edit($id){
        $producto = Producto::findOrFail($id);
        return view('Admin.Edit', compact('producto'));
    }

    public function update(Request $request, $id){
        $producto = Producto::findOrFail($id);
        $producto->update($request->all());
        return redirect()->route('mainClient')->with('success', 'Producto actualizado exitosamente');
    }

    public function destroy($id){
        $producto = Producto::findOrFail($id);
        $producto->delete();
        return redirect()->route('mainClient')->with('success', 'Producto eliminado exitosamente');
    }

    // public function show($id){
    //     $producto = Producto::findOrFail($id);

    //     return view('Client.product', compact('producto'));
    // }
}
