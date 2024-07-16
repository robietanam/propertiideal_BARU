<?php

namespace App\Http\Controllers\Partner\Properti;

use App\Http\Controllers\Controller;
use App\Models\FotoProperti;
use App\Models\KategoriPenjualan;
use App\Models\Partner;
use App\Models\Properti;
use App\Models\PropertiApartement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class ApartementPartnerController extends Controller
{
    public function index()
    {
        $properti = Properti::with('properti_apartement', 'foto_properti')->get();
        // dd($properti);
        return view('partner.dashboard.properti.apartement.index');
    }

    public function create()
    {
        $salescategories = KategoriPenjualan::all();

        return view('partner.dashboard.properti.apartement.create', compact('salescategories'));
    }

    public function generateSlug($kalimat)
    {
        $lower = strtolower($kalimat);
        $slug = str(' ', '-', $lower);
        return $slug;
    }

    public function generateSlugApartment($length = 15)
    {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $slug = '';
        for ($i = 0; $i < $length; $i++) {
            $slug .= $characters[random_int(0, $charactersLength - 1)];
        }
        return $slug;
    }

    public function store(Request $request)
    {
        try {
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
                'luas_apartement' => 'required',
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
                'luas_apartement.required' => 'Tidak boleh kosong!',
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
            $inputProperti['slug'] = $this->generateSlug($inputProperti['nama_properti']);
            $inputProperti['alamat'] = $request->alamat;
            $inputProperti['deskripsi'] = $request->deskripsi;
            $inputProperti['harga'] = $request->harga;
            $inputProperti['latitude'] = $request->latitude;
            $inputProperti['longitude'] = $request->longitude;
            $inputProperti['prioritas'] = $request->prioritas;
            $inputProperti['kategori_penjualan_id'] = $request->kategori_penjualan_id;
            $inputProperti['kategori_properti_id'] = 4;

            // dd($inputProperti);

            $properti = Properti::create($inputProperti);
            // dd($properti->id);

            if ($properti) {
                // dd('Masuk kesini dah');
                $inputPropertiApartment['slug'] = $this->generateSlugApartment();
                $inputPropertiApartment['luas_apartement'] = $request->luas_apartement;
                $inputPropertiApartment['jumlah_kamar_tidur'] = $request->jumlah_kamar_tidur;
                $inputPropertiApartment['jumlah_kamar_mandi'] = $request->jumlah_kamar_mandi;
                $inputPropertiApartment['properti_id'] = $properti->id;

                $propertiApartmen = PropertiApartement::create($inputPropertiApartment);

                if ($propertiApartmen) {
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
                            $destinationPath = public_path('/upload/apartement');
                            $image->move($destinationPath, $filename);

                            $imagePath = 'public/upload/apartement/' . $filename;

                            $jenisFoto = DB::table('jenis_foto')->where('jenis_foto', $photoType)->first();

                            FotoProperti::create([
                                'foto_properti' => $imagePath,
                                'deskripsi_foto' => $photoType,
                                'jenis_foto_id' => $jenisFoto->id_jenis_foto,
                                'properti_id' => $properti->id,
                            ]);
                        }
                    }
                }
                return redirect()->route('pages.dashboard.properti.apartement')->with('success', 'Properti berhasil dibuat!');
            } else {
                return redirect()->back()->with('error', 'Terjadi kesalahan');
            }
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function update($slug)
    {
        return view('partner.dashboard.properti.apartement.update');
    }

    public function edit(Request $request, $slug)
    {
        // TODO
    }

    public function destroy(Request $request, $slug)
    {
        // TODO
    }
}
