<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UmkmController;
use App\Http\Controllers\indexController;

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

use App\Http\Controllers\ProdukController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\KecamatanController;
use App\Http\Controllers\KelurahanController;

use App\Models\Kategori;
use App\Models\Produk;

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

// Route::get('/', function () {
//     return view('layout.dashboard');
// });

Route::get('/', [indexController::class, 'indexes']);
Route::get('/katalog', [indexController::class, 'index']);
Route::get('/kategori1', [indexController::class, 'kategori']);
Route::get('/halamankategori/{id}', [indexController::class, 'kategori2']);
// Route::get('/kategori1/{id}/search', [UmkmController::class, 'search']);

Route::get('/about', function () {
    return view('layout.about');
});

//

Route::get('/pengawas', function () {
    return view('layout.pengawas');
});

Route::get('/halamanumkm', function () {
    return view('layout.halamanumkm');
});
//

Route::resource('umkm', UmkmController::class);

Route::resource('produk', ProdukController::class);

Route::resource('kecamatan', KecamatanController::class);

Route::resource('kelurahan', KelurahanController::class);

// Route::resource('kategori', KategoriController::class);

Route::get('/halamankategori/{kategori:nama_kategori}', function(Produk $prod){
    return view('layout.kategori', [
        'title' => $prod->kategori_id
    ]);

});

Route::get('/anggota', function () {
    return view('layout.anggota');
});


Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);


// Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::get('/register1', [RegisterController::class, 'index1'])->middleware('guest');
Route::post('/register1', [RegisterController::class, 'store1']);

Route::middleware('auth')->group(function () {
    Route::get('/register', [RegisterController::class, 'index'])->name('Register.index');
    Route::post('/register', [RegisterController::class, 'store'])->name('Register.store');
});


