<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class DashboardAdminController extends Controller
{
    private $param;
    public function index(){
        if (Auth::check() && Auth::user()->role == 'Admin') {

            $this->param['partner'] = DB::table('users')
                                                ->join('partner', 'users.id', '=', 'partner.user_id')
                                                ->where('users.role', 'Partner')
                                                ->where('partner.status', 'Sudah Verifikasi')
                                                ->count();
            $this->param['properti'] = DB::table('properti')
                                            ->where('status', 'Tersedia') 
                                            ->orWhere('status', 'Tidak Tersedia')  
                                            ->count();    
            $this->param['kategori'] = DB::table('kategori_solution')
                                            ->count();
            $this->param['solusi'] = DB::table('properti_solution')
                                        ->where('status', 'Tersedia') 
                                        ->orWhere('status', 'Tidak Tersedia')
                                        ->count();                      
            return view('admin.pages.dashboard', $this->param);
        }
        return view('admin.pages.auth.login');
    }

    public function profile(){
        $this->param['profile'] = DB::table('profile_perusahaan')->first();
        return view('admin.pages.profile_perusahaan', $this->param);
    }

    public function edit_profile(Request $request, $id){
        DB::table('profile_perusahaan')
            ->where('id_profile_perusahaan', $id)
            ->update([
                'nama_perusahaan' => $request->nama,
                'privacy_policy' => $request->pp,
                'no_hp' => $request->nohp,
                'instagram' => $request->instagram,
                'email' => $request->email
            ]);
        return redirect('/admin/profile');
    }
}
