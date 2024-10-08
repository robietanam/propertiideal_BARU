<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FotoSolutionController extends Controller
{
    private $param;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($id)
    {
        $this->param['id_properti_solution'] = $id;
        return view('admin.pages.solution.addfoto', $this->param);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'foto' => 'required|file|mimes:jpeg,jpg,png|max:2048'
        ]);

        $date = $date = date('H-i-s');
        $filename = $date.$request->file('foto')->getClientOriginalName();
        $request->file('foto')->move('upload/solution/', $filename);

        DB::table('foto_solution')->insert([
            'foto_solution' => $filename,
            'deskripsi_foto' => $request->deskripsi,
            'properti_id' => $request->properti_id
        ]);

        return redirect('/properti-solution/'.$request->properti_id);
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
        $this->param['data'] = DB::table('foto_solution')->where('id_foto_solution', $id)->first();
        return view('admin.pages.solution.editfoto', $this->param);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        if ($request->foto != '') {
            $request->validate([
                'foto' => 'required|file|mimes:jpeg,jpg,png|max:2048'
            ]);

            $date = $date = date('H-i-s');
            $filename = $date.$request->file('foto')->getClientOriginalName();
            $request->file('foto')->move('upload/solution/', $filename);

            $data = DB::table('foto_solution')->where('id_foto_solution', $id)->first();
            if (File::exists(public_path('upload/solution/'.$data->foto_solution)))
            {
                File::delete(public_path('upload/solution/'.$data->foto_solution));
            }

            DB::table('foto_solution')->where('id_foto_solution', $id)->update([
                'foto_solution' => $filename,
                'deskripsi_foto' => $request->deskripsi,
            ]);

        }
        else {
            DB::table('foto_solution')->where('id_foto_solution', $id)->update([
                'deskripsi_foto' => $request->deskripsi,
            ]);
        }

        return redirect('/properti-solution/'.$request->properti_id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = DB::table('foto_solution')->where('id_foto_solution', $id)->first();

        if (File::exists(public_path('upload/solution/'.$data->foto_solution)))
        {
            File::delete(public_path('upload/solution/'.$data->foto_solution));
        }

        DB::table('foto_solution')->where('id_foto_solution', $id)->delete();
        return redirect('/properti-solution/'.$data->properti_id);
    }
}
