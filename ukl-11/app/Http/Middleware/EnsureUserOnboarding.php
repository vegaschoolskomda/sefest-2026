ru<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EnsureUserOnboarding
{
    public function handle(Request $request, Closure $next)
    {
        if (!Auth::check()) {
            return redirect()->route('login');
        }

        // Placeholder: karena belum ada tabel onboarding, kita selalu arahkan user ke onboarding.
        // Nanti bisa dibuat kondisional jika sudah ada field "onboarding_completed".
        if ($request->routeIs('dashboard.*')) {
            // biarkan dashboard jalan kalau memang sudah ada route dashboard.
            return $next($request);
        }

        return $next($request);
    }
}

