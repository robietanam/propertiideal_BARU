<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class ProfileUserController extends Controller
{
    public function index(){
        $user = auth()->user();
        return view('client.pages.dashboard.profile.index', compact('user'));
    }

    public function update_nama(Request $request){
        try {
            $user = auth()->user();

            $validator = Validator::make($request->all(), [
                'nama' => 'required|min:6',
            ], [
                'nama.required' => 'Wajib diisi!',
                'nama.min' => 'Minimal terdiri dari 6 karakter!'
            ]);

            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
            }

            $input = $request->except(['_token', '_method']);

            $user->update($input);
            if ($user) {
                return redirect()->back()->with('success', 'Data nama berhasil diubah');
            } else {
                return redirect()->back()->with('error', 'Data gagal nama berhasil diubah');
            }
        } catch (\Throwable $th) {
            //throw $th;
        }
    }

    public function update_password(Request $request){
        try {
            $user = auth()->user();

            $validator = Validator::make($request->all(), [
                'password' => 'required',
            ], [
                'password.required' => 'Wajib diisi!'
            ]);

            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
            }

            $input = $request->except(['_token', '_method']);
            $input['password'] = bcrypt($request->password);

            $user->update($input);
            if ($user) {
                return redirect()->back()->with('success', 'Data password berhasil diubah');
            } else {
                return redirect()->back()->with('error', 'Data gagal password berhasil diubah');
            }
        } catch (\Throwable $th) {
            //throw $th;
        }
    }

    public function update_foto(Request $request){
        try {
            $user = auth()->user();
            if (!$user) {
                return redirect()->back()->with('error', 'Data user tidak ditemukan');
            }

            $validator = Validator::make($request->all(), [
                'foto_profile' => 'required',
            ], [
                'foto_profile.required' => 'Wajib diisi!'
            ]);

            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
            }

            // dd($request->all());

            $input = $request->except(['_token', '_method']);

            if ($request->hasFile('foto_profile')) {
                File::delete('uploads/' . $user->foto_profile);

                $gambar = $request->file('foto_profile');
                $nama_gambar = time() . rand(1, 9) . '.' . $gambar->getClientOriginalExtension();
                $gambar->move('uploads', $nama_gambar);
                $input['foto_profile'] = $nama_gambar;
            } else {
                unset($input['foto_profile']);
            }

            $user->update($input);

            if ($user) {
                return redirect()->back()->with('success', 'Data akun berhasil diubah');
            } else {
                return redirect()->back()->with('error', 'Data akun gagal diubah');
            }
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }

    public function update_email(Request $request){
        try {
            $user = auth()->user();

            $validator = Validator::make($request->all(), [
                'email' => 'required|email',
            ], [
                'email.required' => 'Wajib diisi',
                'email.email' => 'Harus berformat email'
            ]);

            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
            }

            $input = $request->except(['_token', '_method']);

            $user->update($input);
            if ($user) {
                return redirect()->back()->with('success', 'Data email berhasil diubah');
            } else {
                return redirect()->back()->with('error', 'Data gagal email berhasil diubah');
            }
        } catch (\Throwable $th) {
            //throw $th;
        }
    }
}
