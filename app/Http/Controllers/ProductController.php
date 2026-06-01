<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
use App\Http\Controllers\ProductController;

class ProductController extends Controller
{
    public function index(){
        $productos = Producto::all();

        return view('Client.main', compact('productos'));
    }
}
