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
        $this->param['jual'] = DB::table('properti')
            ->join('kategori_properti', 'properti.kategori_properti_id', '=', 'kategori_properti.id_kategori_properti')
            ->join('kategori_penjualan', 'properti.kategori_penjualan_id', '=', 'kategori_penjualan.id_kategori_penjualan')
            ->join('partner', 'properti.partner_id', '=', 'partner.id_partner')
            ->join('users', 'partner.user_id', '=', 'users.id')
            ->where('id_properti', $id)
            ->first();

        return view('admin.pages.properti.detailjual', $this->param);
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
        $this->param['sewa'] = DB::table('properti')
            ->join('kategori_properti', 'properti.kategori_properti_id', '=', 'kategori_properti.id_kategori_properti')
            ->join('kategori_penjualan', 'properti.kategori_penjualan_id', '=', 'kategori_penjualan.id_kategori_penjualan')
            ->join('partner', 'properti.partner_id', '=', 'partner.id_partner')
            ->join('users', 'partner.user_id', '=', 'users.id')
            ->where('id_properti', $id)
            ->first();

        return view('admin.pages.properti.detailjual', $this->param);
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
