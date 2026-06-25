<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Log;

class MiMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  Closure(Request): (Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // dd('ENTRO AL MIDDLEWARE');
        $next = $next($request);
        // Manipular los datos de la respuesta antes de enviarla al controlador
        Log::info('Middleware ejecutado correctamente para la ruta: ' . $request->path());
        return $next;
    }
}
