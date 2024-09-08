<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PropertiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    private $param;

    public function jual($slug)
    {
        if ($slug == 'all') {
            $this->param['jual'] = DB::table('properti')
                ->join('kategori_properti', 'properti.kategori_properti_id', '=', 'kategori_properti.id_kategori_properti')
                ->join('kategori_penjualan', 'properti.kategori_penjualan_id', '=', 'kategori_penjualan.id_kategori_penjualan')
                ->join('partner', 'properti.partner_id', '=', 'partner.id_partner')
                ->join('users', 'partner.user_id', '=', 'users.id')
                ->select('id_properti', 'nama_properti', 'properti.slug', 'alamat', 'deskripsi', 'harga', 'latitude', 'longitude', 'prioritas', 'properti.status', 'kategori_properti_id', 'kategori_penjualan_id', 'partner_id', 'nama', 'kategori_properti.nama_kategori as kategori_properti',  'kategori_penjualan.nama_kategori as kategori_penjualan')
                ->where('kategori_penjualan.nama_kategori', 'Jual Properti')
                ->get();
        } else {
            $this->param['jual'] = DB::table('properti')
                ->join('kategori_properti', 'properti.kategori_properti_id', '=', 'kategori_properti.id_kategori_properti')
                ->join('kategori_penjualan', 'properti.kategori_penjualan_id', '=', 'kategori_penjualan.id_kategori_penjualan')
                ->join('partner', 'properti.partner_id', '=', 'partner.id_partner')
                ->join('users', 'partner.user_id', '=', 'users.id')
                ->select('id_properti, nama_properti', 'properti.slug', 'alamat', 'deskripsi', 'harga', 'latitude', 'longitude', 'prioritas', 'properti.status', 'kategori_properti_id', 'kategori_penjualan_id', 'partner_id', 'nama', 'kategori_properti.nama_kategori as kategori_properti',  'kategori_penjualan.nama_kategori as kategori_penjualan')
                ->where('kategori_penjualan.nama_kategori', 'Jual Properti')
                ->where('kategori_properti.nama_kategori', $slug)
                ->get();
        }
        //dd($this->param['jual']);
        return view('admin.pages.properti.jual', $this->param);
    }

    public function detailjual($id)
    {
        $this->param['detail'] = DB::table('properti')
            ->join('kategori_properti', 'properti.kategori_properti_id', '=', 'kategori_properti.id_kategori_properti')
            ->join('kategori_penjualan', 'properti.kategori_penjualan_id', '=', 'kategori_penjualan.id_kategori_penjualan')
            ->join('partner', 'properti.partner_id', '=', 'partner.id_partner')
            ->join('users', 'partner.user_id', '=', 'users.id')
            ->select('id_properti', 'nama_properti', 'properti.slug', 'alamat', 'deskripsi', 'harga', 'latitude', 'longitude', 'prioritas', 'properti.status', 'kategori_properti_id', 'kategori_penjualan_id', 'partner_id', 'nama', 'kategori_properti.nama_kategori as kategori_properti',  'kategori_penjualan.nama_kategori as kategori_penjualan')
            ->where('id_properti', $id)
            ->first();

        // dd($this->param['detail']);
        if ($this->param['detail']->kategori_properti == 'Rumah') {
            $this->param['detail_kategori'] = DB::table('properti_rumah')
                                                    ->where('properti_id', $this->param['detail']->id_properti)
                                                    ->first();
        }
        elseif ($this->param['detail']->kategori_properti == 'Kos') {
            $this->param['detail_kategori'] = DB::table('properti_kos')
                                                    ->where('properti_id', $this->param['detail']->id_properti)
                                                    ->first();
        }
        elseif ($this->param['detail']->kategori_properti == 'Tanah') {
            $this->param['detail_kategori'] = DB::table('properti_tanah')
                                                    ->where('properti_id', $this->param['detail']->id_properti)
                                                    ->first();
        }
        elseif ($this->param['detail']->kategori_properti == 'Apartement') {
            $this->param['detail_kategori'] = DB::table('properti_apartement')
                                                    ->where('properti_id', $this->param['detail']->id_properti)
                                                    ->first();
        }
        elseif ($this->param['detail']->kategori_properti == 'Ruko') {
            $this->param['detail_kategori'] = DB::table('properti_ruko')
                                                    ->where('properti_id', $this->param['detail']->id_properti)
                                                    ->first();
        }

        $this->param['foto'] = DB::table('foto_properti')
                                    ->join('jenis_foto', 'jenis_foto.id_jenis_foto', '=', 'foto_properti.jenis_foto_id')
                                    ->where('properti_id', $id)
                                    ->get();
        // dd($this->param);
        return view('admin.pages.properti.detail', $this->param);
    }

    public function sewa($slug)
    {
        if ($slug == 'all') {
            $this->param['sewa'] = DB::table('properti')
                ->join('kategori_properti', 'properti.kategori_properti_id', '=', 'kategori_properti.id_kategori_properti')
                ->join('kategori_penjualan', 'properti.kategori_penjualan_id', '=', 'kategori_penjualan.id_kategori_penjualan')
                ->join('partner', 'properti.partner_id', '=', 'partner.id_partner')
                ->join('users', 'partner.user_id', '=', 'users.id')
                ->select('id_properti', 'nama_properti', 'properti.slug', 'alamat', 'deskripsi', 'harga', 'latitude', 'longitude', 'prioritas', 'properti.status', 'kategori_properti_id', 'kategori_penjualan_id', 'partner_id', 'nama', 'kategori_properti.nama_kategori as kategori_properti',  'kategori_penjualan.nama_kategori as kategori_penjualan')
                ->where('kategori_penjualan.nama_kategori', 'Sewa Properti')
                ->get();
        } else {
            $this->param['sewa'] = DB::table('properti')
                ->join('kategori_properti', 'properti.kategori_properti_id', '=', 'kategori_properti.id_kategori_properti')
                ->join('kategori_penjualan', 'properti.kategori_penjualan_id', '=', 'kategori_penjualan.id_kategori_penjualan')
                ->join('partner', 'properti.partner_id', '=', 'partner.id_partner')
                ->join('users', 'partner.user_id', '=', 'users.id')
                ->select('id_properti', 'nama_properti', 'properti.slug', 'alamat', 'deskripsi', 'harga', 'latitude', 'longitude', 'prioritas', 'properti.status', 'kategori_properti_id', 'kategori_penjualan_id', 'partner_id', 'nama', 'kategori_properti.nama_kategori as kategori_properti',  'kategori_penjualan.nama_kategori as kategori_penjualan')
                ->where('kategori_penjualan.nama_kategori', 'Sewa Properti')
                ->where('kategori_properti.nama_kategori', $slug)
                ->get();
        }
        // dd($this->param['sewa']);
        return view('admin.pages.properti.sewa', $this->param);
    }

    public function detailsewa($id)
    {
        $this->param['detail'] = DB::table('properti')
            ->join('kategori_properti', 'properti.kategori_properti_id', '=', 'kategori_properti.id_kategori_properti')
            ->join('kategori_penjualan', 'properti.kategori_penjualan_id', '=', 'kategori_penjualan.id_kategori_penjualan')
            ->join('partner', 'properti.partner_id', '=', 'partner.id_partner')
            ->join('users', 'partner.user_id', '=', 'users.id')
            ->select('id_properti', 'nama_properti', 'properti.slug', 'alamat', 'deskripsi', 'harga', 'latitude', 'longitude', 'prioritas', 'properti.status', 'kategori_properti_id', 'kategori_penjualan_id', 'partner_id', 'nama', 'kategori_properti.nama_kategori as kategori_properti',  'kategori_penjualan.nama_kategori as kategori_penjualan')
            ->where('id_properti', $id)
            ->first();

        if ($this->param['detail']->kategori_properti == 'Rumah') {
            $this->param['detail_kategori'] = DB::table('properti_rumah')
                                                    ->where('properti_id', $this->param['detail']->id_properti)
                                                    ->first();
        }
        elseif ($this->param['detail']->kategori_properti == 'Kos') {
            $this->param['detail_kategori'] = DB::table('properti_kos')
                                                    ->where('properti_id', $this->param['detail']->id_properti)
                                                    ->first();
        }
        elseif ($this->param['detail']->kategori_properti == 'Tanah') {
            $this->param['detail_kategori'] = DB::table('properti_tanah')
                                                    ->where('properti_id', $this->param['detail']->id_properti)
                                                    ->first();
        }
        elseif ($this->param['detail']->kategori_properti == 'Apartement') {
            $this->param['detail_kategori'] = DB::table('properti_apartement')
                                                    ->where('properti_id', $this->param['detail']->id_properti)
                                                    ->first();
        }
        elseif ($this->param['detail']->kategori_properti == 'Ruko') {
            $this->param['detail_kategori'] = DB::table('properti_ruko')
                                                    ->where('properti_id', $this->param['detail']->id_properti)
                                                    ->first();
        }

        $this->param['foto'] = DB::table('foto_properti')
                                    ->join('jenis_foto', 'jenis_foto.id_jenis_foto', '=', 'foto_properti.jenis_foto_id')
                                    ->where('properti_id', $id)
                                    ->get();

        return view('admin.pages.properti.detail', $this->param);
    }

    public function setproperti($status, $id)
    {
        if ($status == 'tersedia') {
            DB::table('properti')
                ->where('id_properti', $id)
                ->update([
                    'status' => 'Tersedia'
                ]);
        } elseif ($status == 'tidaktersedia') {
            DB::table('properti')
                ->where('id_properti', $id)
                ->update([
                    'status' => 'Tidak Tersedia'
                ]);
        } elseif ($status == 'nonaktif') {
            DB::table('properti')
                ->where('id_properti', $id)
                ->update([
                    'status' => 'Nonaktif'
                ]);
        } else {
            return abort(404);
        }

        return redirect()->back();
    }
}
