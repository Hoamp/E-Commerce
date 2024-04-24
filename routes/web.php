<?php

use App\Http\Controllers\Admin\AdminProdukController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return redirect()->route('home');
});
Route::get('/home', function () {
    return view('home.home');
})->name('home');

Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
});

// admin produk
Route::get('/admin/produk', [AdminProdukController::class, 'index'])->name('admin.produk.index');
Route::get('/admin/produk/tambah-produk', [AdminProdukController::class, 'hal_tambah_produk'])->name('admin.produk.create');
Route::post('/admin/produk', [AdminProdukController::class, 'tambah_produk'])->name('admin.produk.store');
Route::delete('/admin/produk/{id}', [AdminProdukController::class, 'hapus_produk'])->name('admin.produk.delete');
Route::get('/admin/produk/{id}', [AdminProdukController::class, 'detail_produk'])->name('admin.produk.detail');
Route::get('/admin/produk/{id}/edit', [AdminProdukController::class, 'edit_produk'])->name('admin.produk.edit');
Route::put('/admin/produk/{id}/edit', [AdminProdukController::class, 'update_produk'])->name('admin.produk.update');


