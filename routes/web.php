<?php

use App\Http\Controllers\Admin\AdminProdukController;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\HomeController;
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


// public route
Route::get('/', function () {
    return redirect()->route('home');
});
Route::get('/home',  [HomeController::class, 'index'])->name('home');
Route::get('/produk/detail/{id}',  [HomeController::class, 'detail'])->name('produk.detail');


Route::middleware('guest')->group(function(){
    Route::get('auth/login', [AuthController::class,'login'])->name('login');
    Route::post('auth/login', [AuthController::class,'authenticate'])->name('authenticate');
    Route::get('auth/register', [AuthController::class,'register'])->name('register');
    Route::post('auth/register', [AuthController::class,'register_acc'])->name('register_acc');
});


Route::middleware(['auth'])->group(function(){
    Route::get('/test/user', function(){
        return auth()->user();
    });

    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');


    // admin
    // admin produk
    Route::get('/admin/dashboard', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');

    Route::get('/admin/produk', [AdminProdukController::class, 'index'])->name('admin.produk.index');
    Route::get('/admin/produk/tambah-produk', [AdminProdukController::class, 'hal_tambah_produk'])->name('admin.produk.create');
    Route::post('/admin/produk', [AdminProdukController::class, 'tambah_produk'])->name('admin.produk.store');
    Route::delete('/admin/produk/{id}', [AdminProdukController::class, 'hapus_produk'])->name('admin.produk.delete');
    Route::get('/admin/produk/{id}', [AdminProdukController::class, 'detail_produk'])->name('admin.produk.detail');
    Route::get('/admin/produk/{id}/edit', [AdminProdukController::class, 'edit_produk'])->name('admin.produk.edit');
    Route::put('/admin/produk/{id}/edit', [AdminProdukController::class, 'update_produk'])->name('admin.produk.update');

    Route::get('/admin/category', [CategoryController::class, 'index'])->name('admin.category.index');
    Route::get('/admin/category/tambah-kategori', [CategoryController::class, 'hal_tambah_category'])->name('admin.category.create');
    Route::post('/admin/category', [CategoryController::class, 'tambah_category'])->name('admin.category.store');
    Route::delete('/admin/category/{id}', [CategoryController::class, 'hapus_category'])->name('admin.category.delete');
    Route::get('/admin/category/{id}/edit', [CategoryController::class, 'edit_category'])->name('admin.category.edit');
    Route::put('/admin/category/{id}/edit', [CategoryController::class, 'update_category'])->name('admin.category.update');
    // end admin

});


