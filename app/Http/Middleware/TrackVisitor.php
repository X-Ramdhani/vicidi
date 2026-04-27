<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Symfony\Component\HttpFoundation\Response;

class TrackVisitor
{
    public function handle(Request $request, Closure $next): Response
    {
        \Log::info('Middleware TrackVisitor jalan');
        // if (!app()->isProduction()) {
        //     return $next($request);
        // }

        \Log::info('Visitor tracking dijalankan untuk URL: ' . $request->fullUrl());
        $sessionKey = 'v_log_' . md5($request->fullUrl());

        if (!Session::has($sessionKey)) {
            try {
                // Gunakan helper app('visitor') karena kita sudah mendaftarkan
                // Providernya di bootstrap/providers.php
                app('visitor')->visit();

                Session::put($sessionKey, true);
            } catch (\Exception $e) {
                // Jangan biarkan web mati jika tracking error
                report($e);
            }
        }

        return $next($request);
    }
}