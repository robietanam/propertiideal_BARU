<?php

namespace App\Http\Controllers\Partner\Properti;

use App\Http\Controllers\Controller;
use App\Models\FotoProperti;
use App\Models\KategoriPenjualan;
use App\Models\KategoriProperti;
use App\Models\Partner;
use App\Models\Properti;
use App\Models\PropertiKos;
use DB;
use File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Log;

class KosPartnerController extends Controller
{
    // 'luas_kamar',
    //  'jenis_kamar_mandi',
    public function index(Request $request){
        $urlPath = $request->path();
        $segments = explode('/', $urlPath);
        $slug_kategori = end($segments);

        $kategoriProperti = KategoriProperti::where('slug', $slug_kategori)->first();

        $kategoriId = $kategoriProperti->id_kategori_properti;

        $user = auth()->user();
        $partner = Partner::where('user_id', $user->id)->first();
        $partnerId = $partner->id_partner;

        $propertiCollection = Properti::with('properti_kos', 'foto_properti')
        ->where('kategori_properti_id', $kategoriId)
        ->where('partner_id', $partnerId)
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
                'kos' => [],
                'photos' => [],
            ];

            foreach ($properti->properti_kos as $kos) {
                $propertiData['kos'][] = [
                    'slug' => $kos->slug,
                    'luas_kos' => $kos->luas_kos,
                    'jenis_kamar_mandi' => $kos->jenis_kamar_mandi,
                ];
            }

            foreach ($properti->foto_properti as $photos) {
                $propertiData['photos'][] = [
                    'foto_properti' => asset($photos->foto_properti),
                    'deskripsi_foto' => $photos->deskripsi_foto,
                ];
            }

            $datas[] = $propertiData;
        }

        return view('partner.dashboard.properti.kos.index', compact('datas'));
    }

    public function create(){
        $salescategories = KategoriPenjualan::all();
        return view('partner.dashboard.properti.kos.create', compact('salescategories'));
    }

    public function generateSlug($unslug)
    {
        $lower = strtolower($unslug);
        $slug = str_replace(' ', '-', $lower);
        return $slug;
    }

    public function generateSlugKos($length = 15)
    {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $slug = '';
        for ($i = 0; $i < $length; $i++) {
            $slug .= $characters[random_int(0, $charactersLength - 1)];
        }
        return $slug;
    }

    public function store(Request $request){
        try {
            $user = auth()->user();
            $partner = Partner::where('user_id', $user->id)->first();

            // dd($request->all());

            $validator = Validator::make($request->all(), [
                'nama_properti' => 'required',
                'alamat' => 'required',
                'deskripsi' => 'required',
                'harga' => 'required|numeric|gt:0',
                'latitude' => 'required',
                'longitude' => 'required',
                'kategori_penjualan_id' => 'required',
                'luas_kamar' => 'required',
                'jenis_kamar_mandi' => 'required',
                'foto_depan' => 'required|image',
                'foto_samping_kiri' => 'required|image',
                'foto_samping_kanan' => 'required|image',
                'foto_belakang' => 'required|image',
            ], [
                'nama_properti.required' => 'Tidak boleh kosong!',
                'alamat.required' => 'Tidak boleh kosong!',
                'deskripsi.required' => 'Tidak boleh kosong!',
                'harga.required' => 'Tidak boleh kosong!',
                'harga.numeric' => 'Wajib angka!',
                'harga.gt' => 'Tidak boleh 0!',
                'latitude.required' => 'Tidak boleh kosong!',
                'longitude.required' => 'Tidak boleh kosong!',
                'kategori_penjualan_id.required' => 'Tidak boleh kosong!',
                'luas_kamar.required' => 'Tidak boleh kosong!',
                'jenis_kamar_mandi.required' => 'Tidak boleh kosong!',
                'foto_depan.required' => 'Tidak boleh kosong!',
                'foto_samping_kiri.required' => 'Tidak boleh kosong!',
                'foto_samping_kanan.required' => 'Tidak boleh kosong!',
                'foto_belakang.required' => 'Tidak boleh kosong!',
                'foto_depan.image' => 'File harus berupa gambar!',
                'foto_samping_kiri.image' => 'File harus berupa gambar!',
                'foto_samping_kanan.image' => 'File harus berupa gambar!',
                'foto_belakang.image' => 'File harus berupa gambar!',
            ]);

            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
            }

            $inputProperti['nama_properti'] = $request->nama_properti;
            $inputProperti['partner_id'] = $partner->id_partner;
            $inputProperti['slug'] = $this->generateSlug($request->nama_properti);
            $inputProperti['alamat'] = $request->alamat;
            $inputProperti['deskripsi'] = $request->deskripsi;
            $inputProperti['harga'] = $request->harga;
            $inputProperti['latitude'] = $request->latitude;
            $inputProperti['longitude'] = $request->longitude;
            $inputProperti['kategori_penjualan_id'] = $request->kategori_penjualan_id;
            $inputProperti['kategori_properti_id'] = 2;

            $properti = Properti::create($inputProperti);

            if ($properti) {
                $inputPropertiKos['slug'] = $this->generateSlugKos();
                $inputPropertiKos['luas_kamar'] = $request->luas_kamar;
                $inputPropertiKos['jenis_kamar_mandi'] = $request->jenis_kamar_mandi;
                $inputPropertiKos['properti_id'] = $properti->id_properti;

                $propertiKos = PropertiKos::create($inputPropertiKos);

                if ($propertiKos) {
                    $photos = [
                        'foto_depan' => 'Depan',
                        'foto_samping_kiri' => 'Samping Kiri',
                        'foto_samping_kanan' => 'Samping Kanan',
                        'foto_belakang' => 'Belakang'
                    ];

                    foreach ($photos as $photoField => $photoType) {
                        if ($request->hasFile($photoField)) {
                            $image = $request->file($photoField);
                            $filename = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
                            $destinationPath = public_path('/upload/kos');
                            $image->move($destinationPath, $filename);

                            $imagePath = 'upload/kos/' . $filename;

                            $jenisFoto = DB::table('jenis_foto')->where('jenis_foto', $photoType)->first();

                            FotoProperti::create([
                                'foto_properti' => $imagePath,
                                'deskripsi_foto' => $photoType,
                                'jenis_foto_id' => $jenisFoto->id_jenis_foto,
                                'properti_id' => $properti->id_properti,
                            ]);
                        }
                    }
                }
                return redirect()->route('pages.dashboard.properti.kos')->with('success', 'Properti berhasil dibuat!');
            } else {
                return redirect()->back()->with('error', 'Terjadi kesalahan');
            }
        } catch (\Exception $e) {
            Log::error('Error in store method: ' . $e->getMessage(), [
                'request' => $request->all(),
                'exception' => $e,
            ]);

            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function update($slug){
        $salescategories = KategoriPenjualan::all();
        $properti = Properti::with('properti_kos', 'foto_properti')->where('slug', $slug)->first();

        return view('partner.dashboard.properti.kos.update', compact('properti', 'salescategories'));
    }

    public function edit(Request $request, $slug){
        try {
            $user = auth()->user();
            $partner = Partner::where('user_id', $user->id)->first();
            $properti = Properti::where('slug', $slug)->firstOrFail();

            $propertiKos = PropertiKos::where('properti_id', $properti->id_properti)->firstOrFail();

            $validator = Validator::make($request->all(), [
                'nama_properti' => 'required',
                'alamat' => 'required',
                'deskripsi' => 'required',
                'harga' => 'required|numeric|gt:0',
                'latitude' => 'required',
                'longitude' => 'required',
                'kategori_penjualan_id' => 'required',
                'luas_kamar' => 'required',
                'jenis_kamar_mandi' => 'required',
                'foto_depan' => 'sometimes|image',
                'foto_samping_kiri' => 'sometimes|image',
                'foto_samping_kanan' => 'sometimes|image',
                'foto_belakang' => 'sometimes|image',
            ], [
                'nama_properti.required' => 'Tidak boleh kosong!',
                'alamat.required' => 'Tidak boleh kosong!',
                'deskripsi.required' => 'Tidak boleh kosong!',
                'harga.required' => 'Tidak boleh kosong!',
                'harga.numeric' => 'Wajib angka!',
                'harga.gt' => 'Tidak boleh 0!',
                'latitude.required' => 'Tidak boleh kosong!',
                'longitude.required' => 'Tidak boleh kosong!',
                'kategori_penjualan_id.required' => 'Tidak boleh kosong!',
                'luas_kamar.required' => 'Tidak boleh kosong!',
                'jenis_kamar_mandi.required' => 'Tidak boleh kosong!',
                'foto_depan.image' => 'File harus berupa gambar!',
                'foto_samping_kiri.image' => 'File harus berupa gambar!',
                'foto_samping_kanan.image' => 'File harus berupa gambar!',
                'foto_belakang.image' => 'File harus berupa gambar!',
            ]);

            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
            }

            $properti->update([
                'nama_properti' => $request->nama_properti,
                'alamat' => $request->alamat,
                'deskripsi' => $request->deskripsi,
                'harga' => $request->harga,
                'latitude' => $request->latitude,
                'longitude' => $request->longitude,
                'prioritas' => $request->prioritas,
                'kategori_penjualan_id' => $request->kategori_penjualan_id,
            ]);

            $propertiKos->update([
                'luas_kamar' => $request->luas_kamar,
                'jenis_kamar_mandi' => $request->jenis_kamar_mandi,
            ]);

            $photos = [
                'foto_depan' => 'Depan',
                'foto_samping_kiri' => 'Samping Kiri',
                'foto_samping_kanan' => 'Samping Kanan',
                'foto_belakang' => 'Belakang'
            ];

            foreach ($photos as $photoField => $photoType) {
                if ($request->hasFile($photoField)) {
                    $image = $request->file($photoField);
                    $filename = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
                    $destinationPath = public_path('/upload/kos');
                    $image->move($destinationPath, $filename);

                    $imagePath = 'upload/kos/' . $filename;

                    $jenisFoto = DB::table('jenis_foto')->where('jenis_foto', $photoType)->first();
                    FotoProperti::where('properti_id', $properti->id_properti)
                        ->where('jenis_foto_id', $jenisFoto->id_jenis_foto)
                        ->update([
                            'foto_properti' => $imagePath,
                            'deskripsi_foto' => $photoType,
                        ]);
                }
            }

            return redirect()->route('pages.dashboard.properti.kos')->with('success', 'Properti berhasil diperbarui!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function destroy(Request $request, $slug){
        $properti = Properti::where('slug', $slug)->first();

        if ($properti) {
            $fotoProperti = FotoProperti::where('properti_id', $properti->id_properti)->get();

            foreach ($fotoProperti as $foto) {
                File::delete($foto->foto_properti);
                $foto->delete();
            }
            $properti->delete();

            return redirect()->route('pages.dashboard.properti.kos')->with('success', 'Properti berhasil dihapus!');
        }

        return redirect()->back()->with('error', 'Properti tidak ditemukan!');
    }
}
