<?php

namespace App\Http\Controllers\Partner;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class InformationPartnerController extends Controller
{
    public function index(){
        return view('partner.dashboard.information.index');
    }
}
