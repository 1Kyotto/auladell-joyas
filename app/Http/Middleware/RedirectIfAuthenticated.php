<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, string $guard = null)
    {
        // Verificar si el usuario está autenticado
        if (Auth::guard($guard)->check()) {
            // Redirigir al home o al dashboard
            return redirect()->route('home.index');  // Puedes cambiar esta ruta a lo que prefieras
        }

        return $next($request);
    }
}
