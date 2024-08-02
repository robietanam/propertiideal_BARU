<?php

namespace App\Http\Controllers\Partner\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Models\Partner;
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
                $userId = Auth::user()->id;
                $partner = Partner::where('user_id', $userId)->first();
                if ($partner->status == 'Belum Verifikasi') return redirect()->route('pages.partner.login')->with('status', 'Anda belum diverifikasi oleh Admin!');
                if ($partner->status == 'Nonaktif') return redirect()->route('pages.partner.login')->with('status', 'Anda dinonaktifkan oleh Admin!');
                return redirect()->route('pages.dashboard.partner');
            } else {
                Auth::guard('web')->logout();
                return redirect()->route('pages.partner.login')->with('status', 'Anda bukan partner!');
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

        return redirect()->route('pages.partner.login');
    }
}
