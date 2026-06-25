<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use App\Http\Middleware\EnsureTokenIsValid;
use App\Http\Middleware\MiMiddleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware): void {
        //Sirve para autentificar a los usuarios en todas las clases
        $middleware->append(EnsureTokenIsValid::class);
        $middleware->alias([
            'ReglasDeMiMiddleware' => MiMiddleware::class,

        ]);
    })
    ->withExceptions(function (Exceptions $exceptions): void {
        
    })->create();
