<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use App\Models\KategoriProperti;
use App\Models\Properti;
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

    public function buy(Request $request){

        $categories = KategoriProperti::all();

        $query = Properti::query();

        if ($request->has('category')) {
            $kategoriParams = KategoriProperti::where('slug', $request->category)->first();
            $kategoriId = $kategoriParams->id_kategori_properti;

            $query->where('kategori_properti_id', $kategoriId);
        }

        if ($request->has('minimal') && $request->minimal !== null) {
            $query->where('harga', '>=', $request->minimal);
        }

        if ($request->has('maksimal') && $request->maksimal !== null) {
            $query->where('harga', '<=', $request->maksimal);
        }

        $properties = $query->get();

        return view('client.pages.buy.index', compact('categories', 'properties'));
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

    public function propertiideal(){

        return view('client.pages.services.ideal.index');
    }

    public function propertisolution(){
        return view('client.pages.services.solutions.index');
    }
}
