<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Produk;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $produk = Produk::latest()->paginate(4);

        if(Category::count() > 0){    
            $produkByNewestKategori = Produk::with(['category'])->where('category_id', Category::latest()->first()->id)->get();
        }
        $produkByNewestKategori = null;

        return view('home.home', compact('produk', 'produkByNewestKategori'));
    }

    public function detail($id){
        $produk = Produk::with(['category'])->where('id', $id)->first();
        
        return view('customers.produk.detail', compact('produk'));
    }
}
