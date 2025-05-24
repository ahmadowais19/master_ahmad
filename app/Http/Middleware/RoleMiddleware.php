<?php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RoleMiddleware
{
    public function handle(Request $request, Closure $next, ...$roles)
    {
        if (!Auth::check()) {
            abort(401); // غير مسجل دخول
        }

        $user = Auth::user();

        if (in_array($user->role, $roles)) {
            return $next($request); // عنده صلاحية
        }

        abort(403, 'Unauthorized'); // ما عنده صلاحية
    }
}

