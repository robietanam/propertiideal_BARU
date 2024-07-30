<?php

namespace App\Http\Controllers\Partner\Properti;

use App\Http\Controllers\Controller;
use App\Models\FotoProperti;
use App\Models\KategoriPenjualan;
use App\Models\KategoriProperti;
use App\Models\Partner;
use App\Models\Properti;
use App\Models\PropertiRumah;
use File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class RumahPartnerController extends Controller
{
    public function index(Request $request){
        $urlPath = $request->path();
        $segments = explode('/', $urlPath);
        $slug_kategori = end($segments);

        $kategoriProperti = KategoriProperti::where('slug', $slug_kategori)->first();

        $kategoriId = $kategoriProperti->id_kategori_properti;

        $user = auth()->user();
        $partner = Partner::where('user_id', $user->id)->first();
        $partnerId = $partner->id_partner;

        $propertiCollection = Properti::with('properti_rumah', 'foto_properti')
        ->where('kategori_properti_id', $kategoriId)
        ->where('partner_id', $partnerId)
        ->get();

        // dd($propertiCollection);

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
                'rumah' => [],
                'photos' => [],
            ];

            foreach ($properti->properti_rumah as $rumah) {
                $propertiData['rumah'][] = [
                    'slug' => $rumah->slug,
                    'luas_tanah' => $rumah->luas_tanah,
                    'luas_bangunan' => $rumah->luas_bangunan,
                    'jumlah_garasi' => $rumah->jumlah_garasi,
                    'jumlah_kamar_tidur' => $rumah->jumlah_kamar_tidur,
                    'jumlah_kamar_mandi' => $rumah->jumlah_kamar_mandi,
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

        return view('partner.dashboard.properti.rumah.index', compact('datas'));
    }

    public function create(){
        $salescategories = KategoriPenjualan::all();

        return view('partner.dashboard.properti.rumah.create', compact('salescategories'));
    }

    public function generateSlug($unslug)
    {
        $lower = strtolower($unslug);
        $slug = str_replace(' ', '-', $lower);
        return $slug;
    }

    public function generateSlugRumah($length = 15)
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
            // dd($request);
            $user = auth()->user();
            $partner = Partner::where('user_id', $user->id)->first();

            $validator = Validator::make($request->all(), [
                'nama_properti' => 'required',
                'alamat' => 'required',
                'deskripsi' => 'required',
                'harga' => 'required|numeric|gt:0',
                'latitude' => 'required',
                'longitude' => 'required',
                'kategori_penjualan_id' => 'required',
                'luas_tanah' => 'required',
                'luas_bangunan' => 'required',
                'jumlah_garasi' => 'required',
                'jumlah_kamar_tidur' => 'required',
                'jumlah_kamar_mandi' => 'required',
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
                'luas_tanah.required' => 'Tidak boleh kosong!',
                'luas_bangunan.required' => 'Tidak boleh kosong!',
                'jumlah_garasi.required' => 'Tidak boleh kosong!',
                'jumlah_kamar_tidur.required' => 'Tidak boleh kosong!',
                'jumlah_kamar_mandi.required' => 'Tidak boleh kosong!',
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
            $inputProperti['prioritas'] = $request->prioritas;
            $inputProperti['kategori_penjualan_id'] = $request->kategori_penjualan_id;
            $inputProperti['kategori_properti_id'] = 1;

            $properti = Properti::create($inputProperti);

            if ($properti) {
                $inputPropertiRumah['slug'] = $this->generateSlugRumah();
                $inputPropertiRumah['luas_tanah'] = $request->luas_tanah;
                $inputPropertiRumah['luas_bangunan'] = $request->luas_bangunan;
                $inputPropertiRumah['jumlah_garasi'] = $request->jumlah_garasi;
                $inputPropertiRumah['jumlah_kamar_tidur'] = $request->jumlah_kamar_tidur;
                $inputPropertiRumah['jumlah_kamar_mandi'] = $request->jumlah_kamar_mandi;
                $inputPropertiRumah['properti_id'] = $properti->id_properti;

                $propertiRumah = PropertiRumah::create($inputPropertiRumah);

                if ($propertiRumah) {
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
                            $destinationPath = public_path('/upload/rumah');
                            $image->move($destinationPath, $filename);

                            $imagePath = 'upload/rumah/' . $filename;

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
                return redirect()->route('pages.dashboard.properti.rumah')->with('success', 'Properti berhasil dibuat!');
            } else {
                return redirect()->back()->with('error', 'Terjadi kesalahan');
            }
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function update($slug){
        $salescategories = KategoriPenjualan::all();
        $properti = Properti::with('properti_rumah', 'foto_properti')->where('slug', $slug)->first();

        return view('partner.dashboard.properti.rumah.update', compact('properti', 'salescategories'));
    }

    public function edit(Request $request, $slug){
        try {
            $user = auth()->user();
            $partner = Partner::where('user_id', $user->id)->first();
            $properti = Properti::where('slug', $slug)->firstOrFail();
            $propertiRumah = PropertiRumah::where('properti_id', $properti->id_properti)->firstOrFail();

            $validator = Validator::make($request->all(), [
                'nama_properti' => 'required',
                'alamat' => 'required',
                'deskripsi' => 'required',
                'harga' => 'required|numeric|gt:0',
                'latitude' => 'required',
                'longitude' => 'required',
                'kategori_penjualan_id' => 'required',
                'luas_tanah' => 'required',
                'luas_bangunan' => 'required',
                'jumlah_garasi' => 'required',
                'jumlah_kamar_tidur' => 'required',
                'jumlah_kamar_mandi' => 'required',
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
                'luas_tanah.required' => 'Tidak boleh kosong!',
                'luas_bangunan.required' => 'Tidak boleh kosong!',
                'jumlah_garasi.required' => 'Tidak boleh kosong!',
                'jumlah_kamar_tidur.required' => 'Tidak boleh kosong!',
                'jumlah_kamar_mandi.required' => 'Tidak boleh kosong!',
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

            $propertiRumah->update([
                'luas_tanah' => $request->luas_tanah,
                'luas_bangunan' => $request->luas_bangunan,
                'jumlah_garasi' => $request->jumlah_garasi,
                'jumlah_kamar_tidur' => $request->jumlah_kamar_tidur,
                'jumlah_kamar_mandi' => $request->jumlah_kamar_mandi,
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
                    $destinationPath = public_path('/upload/rumah');
                    $image->move($destinationPath, $filename);

                    $imagePath = 'upload/rumah/' . $filename;

                    $jenisFoto = DB::table('jenis_foto')->where('jenis_foto', $photoType)->first();
                    FotoProperti::where('properti_id', $properti->id_properti)
                        ->where('jenis_foto_id', $jenisFoto->id_jenis_foto)
                        ->update([
                            'foto_properti' => $imagePath,
                            'deskripsi_foto' => $photoType,
                        ]);
                }
            }

            return redirect()->route('pages.dashboard.properti.rumah')->with('success', 'Properti berhasil diperbarui!');
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

            return redirect()->route('pages.dashboard.properti.rumah')->with('success', 'Properti berhasil dihapus!');
        }

        return redirect()->back()->with('error', 'Properti tidak ditemukan!');
    }
}
