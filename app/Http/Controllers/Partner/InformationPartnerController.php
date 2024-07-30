<?php

namespace App\Http\Controllers\Partner;

use App\Http\Controllers\Controller;
use App\Models\Partner;
use Carbon\Carbon;
use Illuminate\Http\Request;

class InformationPartnerController extends Controller
{
    public function index(){
        $user = auth()->user();
        $partner = Partner::where('user_id', $user->id)->first();

        $datas = [];
        $datas['name'] = $user->name;
        $datas['nama'] = $user->nama;
        $datas['foto_profile'] = $user->foto_profile;
        $datas['email'] = $user->email;
        $datas['no_telepon'] = $partner->no_telepon;
        $datas['detail_alamat'] = $partner->detail_alamat;
        $datas['link_instagram'] = $partner->link_instagram;
        $datas['link_website'] = $partner->link_website;
        $datas['foto_ktp'] = $partner->foto_ktp;
        $datas['status'] = $partner->status;
        $datas['bergabung_sejak'] = Carbon::parse($partner->created_at)->format('d M Y, H:i');


        // dd($datas);

        return view('partner.dashboard.information.index', compact('datas'));
    }
}
