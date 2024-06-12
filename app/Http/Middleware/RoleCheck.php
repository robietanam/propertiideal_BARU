<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class RoleCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, ...$roles)
    {
        foreach ($roles as $role) {
            if (Auth::check() && Auth::user()->role == $role) {
                return $next($request);
            }
        }

        $currentUserRole = Auth::check() ? Auth::user()->role : null;

        $redirectTo = '';

        switch ($currentUserRole) {
            case 'Admin':
                $redirectTo = 'admin.login';
                $message = 'Anda bukan Admin!';
                break;
            case 'Partner':
                $redirectTo = 'partner.login';
                $message = 'Anda bukan Partner!';
                break;
            case 'Customer':
                $redirectTo = 'customer.login';
                $message = 'Unauthoritized!';
                break;
            default:
                $redirectTo = 'login';
                $message = 'Unauthoritized!';
                break;
        }

        Auth::logout();
        return redirect()->route($redirectTo)->with('status', $message);
    }
}
