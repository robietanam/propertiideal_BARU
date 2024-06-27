<?php

namespace App\Http\Controllers\User\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Auth;
use Illuminate\Http\Request;

class AuthUserController extends Controller
{
    public function index(){
        if (Auth::check() && Auth::user()->role == 'Customer') {
            return redirect()->back();
        }
        return view('client.auth.login');
    }

    public function register(){
        if (Auth::check() && Auth::user()->role == 'Customer') {
            return redirect()->back();
        }

        return view('client.auth.register');
    }

    public function login(LoginRequest $requst){

    }

    public function registered(Request $requst){

    }
}
