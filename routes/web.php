<?php

use App\Models\Sepatu;
use App\Models\Barangbekas;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ManageController;
use App\Http\Controllers\SepatuController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\BarangbekasController;



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


// ROUTE UNTUK HALAMAN BERANDA ATAU LANDING PAGE
Route::get('/', function () {    //halaman landing
    return view('landing', [
        "title" => "Halaman Home",
        "navtitle" => "Home"
    ]);
})->name('login')->middleware('guest');

// //ROUTE UNTUK HALAMAN HOME
Route::get('/beranda', [BerandaController::class, 'index'])->middleware('auth');

// ROUTE UNTUK SEPATU
Route::get('/sepatu',[SepatuController::class, 'index'])->middleware('auth'); //route all post / katalog sepatu
Route::get('/sepatu/detailsepatu/{id}', [SepatuController::class, 'show'])->middleware('auth'); //route untuk single produk sepatu

// ROUTE UNTUK KATEGORI
Route::get('/categories', [CategoryController::class, 'index'])->middleware('auth'); //route halaman kategori
Route::get('/sepatu/category/{id}', [SepatuController::class, 'category']); //route kategori sepatu

// ROUTE LOGIN
Route::get('/login', [LoginController::class, 'index'])->middleware('guest'); //route halaman login
Route::post('/login', [LoginController::class, 'authenticate']); //autentikasi login

// ROUTE UNTUK LOGOUT
Route::post('/logout', [LoginController::class, 'logout']);

// ROUTE UNTUK REGISTER
Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

// ROUTE  UNTUK CRUD PRODUK
Route::resource('/beranda/manage', ManageController::class)->except('show')->middleware('is_admin');

// Route::get('/barangbekas/category/{id}', [BarangBekasController::class, 'category']); //route untuk kategori barang bekas

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

