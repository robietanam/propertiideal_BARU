<?php

namespace App\Http\Controllers\Partner\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Auth;
use Illuminate\Http\Request;

class AuthPartnerController extends Controller
{
    public function index()
    {
        return view('partner.auth.login');
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
            if (Auth::user()->role == 'Partner') {
                return redirect()->route('pages.dashboard.partner');
            } else {
                Auth::guard('web')->logout();
                return redirect()->route('partner.login')->with('status', 'Anda bukan partner!');
            }
        }

        return redirect()->back()->with([
            'status' => 'Email atau password anda salah!',
        ]);
    }
}
