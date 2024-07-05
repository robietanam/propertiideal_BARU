<?php

namespace App\Http\Controllers\Partner\Properti;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ApartementPartnerController extends Controller
{
    public function index(){
        return view('partner.dashboard.properti.apartement.index');
    }

    public function create(){
        return view('partner.dashboard.properti.apartement.create');
    }

    public function store(Request $request){
        // TODO
    }

    public function update($slug){
        return view('partner.dashboard.properti.apartement.update');
    }

    public function edit(Request $request, $slug){
        // TODO
    }

    public function destroy(Request $request, $slug){
        // TODO
    }
}
