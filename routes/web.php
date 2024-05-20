<?php

use App\Models\Sepatu;
use App\Models\Barangbekas;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SepatuController;
use App\Http\Controllers\BarangbekasController;
use App\Http\Controllers\CategoryController;




/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


//ROUTE UNTUK HALAMAN HOME
Route::get('/', function() {
    return view('home.index',[
        'title' => 'Halaman Home',
        'navtitle' => 'Home'
    ]);
})->middleware('auth');

// ROUTE UNTUK HALAMAN BERANDA ATAU LANDING PAGE
Route::get('/beranda', function () {    //halaman landing
    return view('landing', [
        "title" => "Halaman Utama",
        "navtitle" => "Beranda"
    ]);
})->name('login')->middleware('guest');

// ROUTE UNTUK SEPATU
Route::get('/sepatu',[SepatuController::class, 'index'])->middleware('auth'); //route all post / katalog sepatu
Route::get('/sepatu/detailsepatu/{id}', [SepatuController::class, 'show']); //route untuk single produk sepatu

// ROUTE UNTUK BARANG BEKAS
Route::get('/barangbekas',[BarangbekasController::class, 'index'])->middleware('auth'); //route all post / katalog barang bekas
Route::get('/barangbekas/detailbarangbekas/{id}', [BarangBekasController::class, 'show']); //route untuk single produk barang bekas

// ROUTE UNTUK KATEGORI
Route::get('/categories', [CategoryController::class, 'index'])->middleware('auth'); //route halaman kategori
Route::get('/sepatu/category/{id}', [SepatuController::class, 'category']); //route kategori sepatu
Route::get('/barangbekas/category/{id}', [BarangBekasController::class, 'category']); //route untuk kategori barang bekas

// ROUTE LOGIN
Route::get('/login', [LoginController::class, 'index'])->middleware('guest'); //route halaman login
Route::post('/login', [LoginController::class, 'authenticate']); //autentikasi login

// ROUTE UNTUK LOGOUT
Route::post('/logout', [LoginController::class, 'logout']);

// ROUTE UNTUK REGISTER
Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);


// Route::get('/detailsepatus/{detailsepatu:slug}', function(DetailSepatu $detailsepatu) { //closure
//     return view ('detailsepatu',[
//         'title' => $detailsepatu->nama,
//         'img' => $detailsepatu->img,
//         'detailsepatu' => $detailsepatu->deskripsi,
//         'harga' => $detailsepatu->harga,
//         'navtitle' => 'Detail Sepatu',
//         'sepatus' => Sepatu::all() 
//     ]);
// });


// Route::get('/special', function () {
//     return view('special', [
//         "title" => "Halaman Special Offer",
//         "navtitle" => "Special Offer"
//     ]);
// });

