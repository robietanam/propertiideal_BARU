<?php

namespace App\Http\Controllers\Partner;

use App\Http\Controllers\Controller;
use App\Models\Partner;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class SubmissionPartnerController extends Controller
{
    public function store(Request $request){
        // dd($request->all());

        try {
            $validator = Validator::make($request->all(), [
                'name' => 'required',
                'nama' => 'required',
                'email' => 'required',
                'password' => 'required|same:konfirmasi_password',
                'konfirmasi_password' => 'required|same:password',
                'no_telepon' => 'required|numeric|gt:0',
                'foto_ktp' => 'required',
            ], [
                'name.required' => 'Tidak boleh kosong!',
            ]);

            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
            }

            $hashedPassword = Hash::make($request->password);

            $inputUser['name'] = $request->name;
            $inputUser['nama'] = $request->nama;
            $inputUser['nama'] = $request->nama;
            $inputUser['email'] = $request->email;
            $inputUser['password'] = $hashedPassword;
            $inputUser['role'] = 'Partner';

            if ($request->has('foto_profil')) {
                $gambar = $request->file('foto_profil');
                $nama_gambar = time() . rand(1, 9) . '.' . $gambar->getClientOriginalExtension();
                $gambar->move('upload/profile', $nama_gambar);
                $inputUser['foto_profil'] = $nama_gambar;
            }

            $user = User::create($inputUser);

            if($user){
                $alamatPartner = $request->provinsi_partner . ", " . 
                 $request->kabupaten_partner . ", " . 
                 $request->kecamatan_partner . ", " . 
                 $request->kelurahan_partner . ", " . 
                 $request->alamat_partner;

            
                $inputPartner['no_telepon'] = $request->no_telepon;
                $inputPartner['detail_alamat'] = $alamatPartner;
                $inputPartner['link_instagram'] = $request->link_instagram ?? '';
                $inputPartner['link_website'] = $request->link_website ?? '';
                $inputPartner['status'] = 'Belum Verifikasi';
                $inputPartner['user_id'] = $user->id;

                if ($request->has('foto_ktp')) {
                    $gambar = $request->file('foto_ktp');
                    $nama_gambar = time() . rand(1, 9) . '.' . $gambar->getClientOriginalExtension();
                    $gambar->move('upload/ktp', $nama_gambar);
                    $inputPartner['foto_ktp'] = $nama_gambar;
                }

                $inputPartnerCreate = Partner::create($inputPartner);

                if($inputPartnerCreate){
                    return redirect()->route('pages.submission')->with('success', 'Anda berhasil mendaftar sebagai partner!');
                } else {
                    return redirect()->route('pages.submission')->with('errors', 'Anda gagal mendaftar sebagai partner!');
                }
            }


        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }
}
