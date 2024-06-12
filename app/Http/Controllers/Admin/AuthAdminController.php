<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthAdminController extends Controller
{
    public function index()
    {
        if (Auth::check() && Auth::user()->role == 'Admin') {
            return redirect()->route('admin.dashboard');
        }

        return view('admin.auth.login');
    }

    /**
     * Handle an incoming authentication request.
     *
     * @param  \App\Http\Requests\Auth\LoginRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(LoginRequest $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            if (Auth::user()->role == 'Admin') {
                return redirect()->route('admin.dashboard');
            } else {
                Auth::guard('web')->logout();
                return redirect()->route('admin.login')->with('status', 'Anda bukan admin!');
            }
        }

        return redirect()->route('admin.login')->with([
            'status' => 'Email atau password anda salah!',
        ]);
    }
}
