<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;

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
// Route::get('/show/{id}', [ProductController::class, 'show'])->name('showProduct');
Route::delete('/destroy/{id}', [ProductController::class, 'destroy'])->name('destroyProduct');
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