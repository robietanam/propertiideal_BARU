<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WishlistUserController extends Controller
{
    public function index(){
        return view('client.pages.dashboard.wishlist.index');
    }

    public function store(Request $request){

    }

    public function destroy(Request $request){

    }
}
