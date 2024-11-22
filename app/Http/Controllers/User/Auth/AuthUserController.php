<?php

namespace App\Http\Controllers\User\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Http\Requests\RegistrationRequest;
use App\Models\User;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

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

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'nama' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:4|same:konfirmasi_password',
            'konfirmasi_password' => 'required|string|min:4|same:password',
        ]);



        if($validator->fails()){
            // dd($validator);
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $user = User::create([
            'name' => $request->name,
            'nama' => $request->nama,
            'email' => $request->email,
            'foto_profile' => 'user.png',
            'password' => Hash::make($request->password),
            'role' => 'Customer',
        ]);

        // dd($user);

        if($user){
            return redirect()->route('pages.customer.login')->with('status', 'Selamat, anda berhasil mendaftar!');
        }
        return redirect()->route('pages.customer.register')->with('status', 'Ups, ulangi untuk mendaftar!');
    }


    public function logout(Request $request){
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }

    // public function registered(Request $requst){

    // }
}
