<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;

Route::get('/Clientes', function () {
    return view('Client.main');
})->name('mainClient');

Route::get('/registro', function () {
    return view('Client.Register');
})->name('register');
 
Route::get('/', [ProductController::class, 'index']);

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