<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PartnerController extends Controller
{
    private $param;

    public function index()
    {
        $this->param['partner'] = DB::table('users')
                                    ->join('partner', 'users.id', '=', 'partner.user_id')
                                    ->where('users.role', 'Partner')
                                    ->get();
        return view('admin.pages.partner.index', $this->param);
    }

    public function show($id)
    {
        $this->param['partner'] = DB::table('users')
                                    ->join('partner', 'users.id', '=', 'partner.user_id')
                                    ->where('users.role', 'Partner')
                                    ->where('id_partner', $id)
                                    ->first();
        return view('admin.pages.partner.detail', $this->param);
    }

    public function verifikasi($id){
        DB::table('partner')->where('id_partner', $id)->update(['status'=>'Sudah Verifikasi']);
        return redirect('/admin/partner');
    }

    public function nonaktif($id){
        DB::table('partner')->where('id_partner', $id)->update(['status'=>'Nonaktif']);
        return redirect('/admin/partner');
    }

    public function aktif($id){
        DB::table('partner')->where('id_partner', $id)->update(['status'=>'Sudah Verifikasi']);
        return redirect('/admin/partner');
    }
}
