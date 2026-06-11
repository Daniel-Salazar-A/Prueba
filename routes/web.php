<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UsuarioController;

// Route::get('/Clientes', function () {
//     return view('Client.main');
// })->name('mainClient');

Route::get('/registro', function () {
    return view('Client.Register');
})->name('register');
 
Route::get('/', [ProductController::class, 'index'])->name('mainClient');
Route::get('/create', [ProductController::class, 'create'])->name('createProduct');
Route::post('/store', [ProductController::class, 'store'])->name('storeProduct');
Route::get('/edit/{id}', [ProductController::class, 'edit'])->name('editProduct');
Route::put('/update/{id}', [ProductController::class, 'update'])->name('updateProduct');
Route::delete('/destroy/{id}', [ProductController::class, 'destroy'])->name('destroyProduct');

Route::get('/usuarios', [UsuarioController::class, 'index'])->name('client.index');
Route::get('/usuarios/create', [UsuarioController::class, 'create'])->name('client.Register');
Route::post('/usuarios/store', [UsuarioController::class, 'store'])->name('client.store');

// Route::get('/greeting', function () {
//     return 'Hello World';
// });

// Sirve para redirigir, pero abajo tiene autentificador.
// Route::get('/user/{id}', [UserController::class, 'show']);

//Sirve para autentificar al usuario
// Route::get('/profile', [UserController::class, 'show'])->middleware('auth');



// class Service
// {
//     // ...
// }
 
// Route::get('/', function (Service $service) {
//     dd($service::class);
// });