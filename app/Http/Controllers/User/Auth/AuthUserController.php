<?php

namespace App\Http\Controllers\User\Auth;

use App\Http\Controllers\Controller;
use Auth;
use Illuminate\Http\Request;

class AuthUserController extends Controller
{
    public function index(){
        if (Auth::check() && Auth::user()->role == 'Customer') {
            return redirect()->route('partner.dashboard');
        }
        return view('client.auth.login');
    }
}
