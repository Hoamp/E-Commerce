<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){
        $category = Category::latest()->paginate(7);
        return view('admin.category.index', compact('category'));
    }

    public function hal_tambah_category(){
        return view('admin.category.create');
    }

    public function tambah_category(Request $request){
        $request->validate([
            'nama' => 'required',
        ]);

        Category::create([
            'nama' => $request->nama,
        ]);

        return redirect()->route('admin.category.index')->with('success', 'sukses menambah kategori');
    }

    
    public function hapus_category(Request $request, Category $id){
        $id->delete();
        
        return redirect()->route('admin.category.index')->with('success', 'sukses menghapus kategori');
    }

    public function edit_category(Category $id){
        $category = $id;
        return view('admin.category.edit', compact('category'));
    }

    public function update_category(Request $request, Category $id){
        $request->validate([
            'nama' => 'required',
        ]);

        $id->update([
            'nama' => $request->nama,
        ]);

        return redirect()->route('admin.category.index')->with('success', 'sukses mengedit kategori');
    }
}
