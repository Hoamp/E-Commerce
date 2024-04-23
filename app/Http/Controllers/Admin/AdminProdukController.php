<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminProdukController extends Controller
{
    public function index(){
        $produk = Produk::latest()->paginate(7);
        
        return view('admin.produk.index', compact('produk'));
    }

    public function hal_tambah_produk(){
        return view('admin.produk.create');
    }

    public function tambah_produk(Request $request){
        $request->validate([
            'nama' => 'required',
            'desc' => 'required',
            'harga' => 'required|numeric',
            'foto' => 'required|image',
        ]);
        $foto = $request->file('foto');
        $foto->storeAs('public/foto-produk', $foto->hashName());

        Produk::create([
            'nama' => $request->nama,
            'desc' => $request->desc,
            'harga' => $request->harga,
            'foto' => $foto->hashName(),
        ]);

        return redirect()->route('admin.produk.index')->with('success', 'sukses menambah produk');
    }

    public function hapus_produk(Request $request, Produk $id){
        Storage::delete('public/foto-produk/'. $id->foto);

        $id->delete();
        
        return redirect()->route('admin.produk.index')->with('success', 'sukses menghapus produk');
    }

    public function detail_produk(Produk $id){
        return view('admin.produk.detail', compact('id'));
    }
}