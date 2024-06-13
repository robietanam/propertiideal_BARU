<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WebPagesController extends Controller
{
    public function about(){
        return view('client.pages.about.index');
    }
    public function contact(){
        return view('client.pages.contact');
    }

    public function sell(){
        return view('client.pages.sell.index');
    }

    public function buy(){
        return view('client.pages.buy.index');
    }

    public function rental(){
        return view('client.pages.rental.index');
    }

    public function detail_properties(){
        return view('client.pages.buy.show');
    }

    public function by_properties(){
        return view('client.pages.services.propertiideal');
    }

    public function by_solutions(){
        return view('client.pages.services.index');
    }

    public function detail_solutions(){
        return view('client.pages.services.show');
    }

    public function by_categories_property($slug){
        // TODO
    }

    public function by_categories_solutions($slug){
        // TODO
    }

    public function copyright(){
        // TODO
    }

    public function wishlist(){
        // TODO
    }

    public function services(){
        return view('client.pages.services.index');
    }

    public function submission(){
        return view('client.pages.sell.show');
    }
}
