<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PropertiSolutionController extends Controller
{
    private $param;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $this->param['solusi'] = DB::table('properti_solution')
                                    ->join('kategori_solution', 'properti_solution.kategori_solution_id', 'kategori_solution.id_kategori_solution')
                                    ->get();
        return view('admin.pages.solution.index', $this->param);
    }

    public function tersedia($id){
        DB::table('properti_solution')->where('id_properti_solution', $id)->update(['status'=>'Tersedia']);
        return redirect('/properti-solution');
    }

    public function nonaktif($id){
        DB::table('properti_solution')->where('id_properti_solution', $id)->update(['status'=>'Nonaktif']);
        return redirect('/properti-solution');
    }

    public function tidaktersedia($id){
        DB::table('properti_solution')->where('id_properti_solution', $id)->update(['status'=>'Tidak Tersedia']);
        return redirect('/properti-solution');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $this->param['kategori'] = DB::table('kategori_solution')->get();
        return view('admin.pages.solution.add', $this->param);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $slug = strtolower($request->nama);
        $slug = preg_replace('/[^a-z0-9\s-]/', '', $slug);
        $slug = preg_replace('/[\s-]+/', '-', $slug);
        $slug = trim($slug, '-');

        DB::table('properti_solution')->insert([
            'nama_solution' => $request->nama,
            'slug' => $slug,
            'deskripsi_solution' => $request->deskripsi,
            'harga_solution' => $request->harga,
            'status' => $request->status,
            'kategori_solution_id' => $request->kategori
        ]);

        return redirect('/properti-solution');
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
        $this->param['kategori'] = DB::table('kategori_solution')->get();
        $this->param['solusi'] = DB::table('properti_solution')
                                    ->join('kategori_solution', 'properti_solution.kategori_solution_id', 'kategori_solution.id_kategori_solution')
                                    ->where('id_properti_solution', $id)
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

        DB::table('properti_solution')->where('id_properti_solution', $id)->update([
            'nama_solution' => $request->nama,
            'slug' => $slug,
            'deskripsi_solution' => $request->deskripsi,
            'harga_solution' => $request->harga,
            'kategori_solution_id' => $request->kategori
        ]);

        return redirect('/properti-solution');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
