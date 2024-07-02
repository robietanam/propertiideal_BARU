<?php

namespace App\Http\Controllers\User\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Auth;
use Illuminate\Http\Request;

class AuthUserController extends Controller
{
    public function index(){
        if (Auth::check()) {
            return redirect('/');
        }
        return view('client.auth.login');
    }

    public function register(){
        if (Auth::check() && Auth::user()->role == 'Customer') {
            return redirect()->back();
        }

        return view('client.auth.register');
    }

    public function login(LoginRequest $request){
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            if (Auth::user()->role == 'Customer') {
                return redirect()->back()->with('status', 'Email atau password salah!');
            } else {
                Auth::guard('web')->logout();
                return redirect()->back()->with('status', 'Email atau password salah!');
            }
        }

        return redirect()->back()->with([
            'status' => 'Email atau password anda salah!',
        ]);
    }

    public function logout(Request $request){
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->back();
    }

    public function registered(Request $requst){

    }
}
