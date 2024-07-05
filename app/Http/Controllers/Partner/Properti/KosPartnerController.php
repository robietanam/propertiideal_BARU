<?php

namespace App\Http\Controllers\Partner\Properti;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class KosPartnerController extends Controller
{
    public function index(){
        return view('partner.dashboard.properti.kos.index');
    }

    public function create(){
        return view('partner.dashboard.properti.kos.create');
    }

    public function store(Request $request){
        // TODO
    }

    public function update($slug){
        return view('partner.dashboard.properti.kos.update');
    }

    public function edit(Request $request, $slug){
        // TODO
    }

    public function destroy(Request $request, $slug){
        // TODO
    }
}
