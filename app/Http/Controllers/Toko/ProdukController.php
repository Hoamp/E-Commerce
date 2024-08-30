<?php

namespace App\Http\Controllers\Toko;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Produk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function index(){
        $produk = Produk::latest()->paginate(8);

        if(Category::count() > 0){    
            $randNum = rand(1, Category::count());
            $category = Category::find($randNum);
            $randCategory = Produk::with(['category'])->where('category_id', $randNum)->get();
        }else{
            $randCategory = null;
        }

        return view('toko.index', compact('produk', 'randCategory', 'category'));
    }

    public function category($nama){
        $category = Category::where('nama', $nama)->first()->id;
        $produk = Produk::where('category_id', $category);
    }
}
