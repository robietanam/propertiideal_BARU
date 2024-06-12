<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardAdminController extends Controller
{
    public function index(){
        if (Auth::check() && Auth::user()->role == 'Admin') {
            return redirect()->route('admin.dashboard');
        }
        return view('admin.pages.auth.login');
    }

    public function profile(){
    }

    public function edit_profile($id){
    }
}
