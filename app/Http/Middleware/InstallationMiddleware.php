<?php

namespace App\Http\Middleware;

use Closure;

use DB;

class InstallationMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        // Check all routes except install.
        if(!$request->is('install')){
            // Check if .env exists.
            if(!file_exists(base_path('.env'))){
                return redirect('install');
            }
        }
        return $next($request);
    }
}
