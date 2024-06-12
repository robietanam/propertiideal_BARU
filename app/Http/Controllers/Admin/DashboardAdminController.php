<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardAdminController extends Controller
{
    public function index(){
        return view('admin.pages.dashboard');
    }
    public function profile(){

    }

    public function edit_profile($id){

    }
}
