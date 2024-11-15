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
            $kategoriParams = KategoriProperti::where('slug', $request->category)
                ->first();

            if ($kategoriParams) {
                $query->where('kategori_properti_id', $kategoriParams->id_kategori_properti);
            }
        }

        if ($request->filled('minimal')) {
            $query->where('harga', '>=', $request->minimal);
        }

        if ($request->filled('maksimal')) {
            $query->where('harga', '<=', $request->maksimal);
        }

        $properties = $query
            ->where('kategori_penjualan_id', 1)
            ->with('foto_properti') 
            ->get();
        // foreach($properties as $foto){
        //     dd($foto->foto_properti);
        // }

        return view('client.pages.buy.index', compact('categories', 'properties'));
    }

    public function rental(Request $request){
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

        $properties = $query->with('foto_properti')->where('kategori_penjualan_id', 2)->get();
        return view('client.pages.rental.index', compact('categories', 'properties'));
    }

    public function detail_properties($slug){
        $propertiCollection = Properti::with('foto_properti', 'partner.user')->where('slug', $slug)
        
        ->first();
        if (!$propertiCollection) {
            abort(404); // or return a suitable message if the property is not found
        }
    
        // Determine the category based on the property data
        $category = null;
    
        // Check which category applies to the property
        if ($propertiCollection->kategori_properti_id == 1) {
            $category = 'rumah';
        } elseif ($propertiCollection->kategori_properti_id == 2) {
            $category = 'kos';
        } elseif ($propertiCollection->kategori_properti_id == 3) {
            $category = 'tanah';
        } elseif ($propertiCollection->kategori_properti_id == 4) {
            $category = 'apartement';
        } elseif ($propertiCollection->kategori_properti_id == 5) {
            $category = 'ruko';
        }
    
        // Dynamically load the relationship based on the determined category
        if ($category) {
            $propertiCollection->load('properti_' . $category); // dynamically load the correct property relationship
        }
    
        // Return the property details along with the correct relationship
        return view('client.pages.buy.show', compact('propertiCollection', 'category'));
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
