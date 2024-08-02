<?php

namespace App\Http\Controllers\Partner;

use App\Http\Controllers\Controller;
use App\Models\Partner;
use App\Models\Properti;
use Carbon\Carbon;
use Illuminate\Http\Request;

class DashboardPartnerController extends Controller
{
    public function index(){
        $user = auth()->user();
        $partner = Partner::where('user_id', $user->id)->first();
        $partnerId = $partner->id_partner;

        $propertiCollection = Properti::with('foto_properti')
        ->where('partner_id', $partnerId)
        ->latest()
        ->take(5)
        ->get();

        $datas = [];

        foreach ($propertiCollection as $properti) {
            $propertiData = [
                'id_properti' => $properti->id_properti,
                'nama_properti' => $properti->nama_properti,
                'slug' => $properti->slug,
                'alamat' => $properti->alamat,
                'deskripsi' => $properti->deskripsi,
                'harga' => 'Rp ' . number_format($properti->harga, 0, ',', '.'),
                'latitude' => $properti->latitude,
                'longitude' => $properti->longitude,
                'status' => $properti->status,
                'photos' => [],
            ];


            foreach ($properti->foto_properti as $photos) {
                $propertiData['photos'][] = [
                    'foto_properti' => asset($photos->foto_properti),
                    'deskripsi_foto' => $photos->deskripsi_foto,
                ];
            }

            $datas[] = $propertiData;
        }

        // dd($datas);

        $user = auth()->user();
        $partner = Partner::where('user_id', $user->id)->first();
        $partnerId = $partner->id_partner;


        $partialCollections = Properti::with('properti_apartement', 'properti_ruko', 'properti_kos', 'properti_rumah', 'properti_tanah')
    ->where('partner_id', $partnerId)
    ->get();

$partials = [
    'countProperti' => 0,
    'countRumah' => 0,
    'countApartement' => 0,
    'countTanah' => 0,
    'countKos' => 0,
    'countRuko' => 0
];

if($user) {
    $partials['countProperti'] = $partialCollections->count();

    foreach ($partialCollections as $partial) {
        $partials['countRumah'] += $partial->properti_rumah->count();
        $partials['countApartement'] += $partial->properti_apartement->count();
        $partials['countTanah'] += $partial->properti_tanah->count();
        $partials['countKos'] += $partial->properti_kos->count();
        $partials['countRuko'] += $partial->properti_ruko->count();
    }
}

// dd($partials);


        $bergabungSejak = Carbon::parse($user->created_at)->format('d, F Y');
        $diverifikasiSejak = Carbon::parse($partner->verified_at)->format('d, F Y');
        // dd($bergabungSejak);

        // dd($partials);

        return view('partner.dashboard.index', compact('datas', 'partials', 'bergabungSejak', 'diverifikasiSejak'));
    }
}
