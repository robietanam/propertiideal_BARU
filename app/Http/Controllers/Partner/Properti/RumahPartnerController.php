<?php

namespace App\Http\Controllers\Partner\Properti;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RumahPartnerController extends Controller
{
    public function index(){
        return view('partner.dashboard.properti.rumah.index');
    }

    public function create(){
        return view('partner.dashboard.properti.rumah.create');
    }

    public function store(Request $request){
        // TODO
    }

    public function update($slug){
        return view('partner.dashboard.properti.rumah.update');
    }

    public function edit(Request $request, $slug){
        // TODO
    }

    public function destroy(Request $request, $slug){
        // TODO
    }
}
