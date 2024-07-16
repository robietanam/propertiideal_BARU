<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KategoriSolutionController extends Controller
{
    private $param;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $this->param['solusi'] = DB::table('kategori_solution')->get();
        return view('admin.pages.solution.index', $this->param);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pages.solution.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $slug = strtolower($request->nama_kategori);
        $slug = preg_replace('/[^a-z0-9\s-]/', '', $slug);
        $slug = preg_replace('/[\s-]+/', '-', $slug);
        $slug = trim($slug, '-');

        DB::table('kategori_solution')->insert([
            'nama_kategori' => $request->nama,
            'deskripsi_kategori' => $request->deskripsi,
            'slug' => $slug
        ]);

        return redirect('/kategori-solution');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $this->param['solusi'] = DB::table('kategori_solution')
                                    ->where('id_kategori_solution', $id)
                                    ->first();
        return view('admin.pages.solution.edit', $this->param);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $slug = strtolower($request->nama);
        $slug = preg_replace('/[^a-z0-9\s-]/', '', $slug);
        $slug = preg_replace('/[\s-]+/', '-', $slug);
        $slug = trim($slug, '-');

        DB::table('kategori_solution')->where('id_kategori_solution', $id)->update([
            'nama_kategori' => $request->nama,
            'deskripsi_kategori' => $request->deskripsi,
            'slug' => $slug
        ]);

        return redirect('/kategori-solution');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB::table('kategori_solution')->where('id_solution', $id)->delete();
        return redirect('/kategori-solution');
    }
}
