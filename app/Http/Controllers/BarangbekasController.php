<?php

namespace App\Http\Controllers;

use App\Models\Barangbekas;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BarangbekasController extends Controller
{
    public function index() {
        return view('barangbekas.barangbekas',[
            'title' => 'Halaman Barang Bekas',
            'navtitle' => 'Barang Bekas',
            'barang' => Barangbekas::all() 
        ]);
    }

    public function category($id) {
        return view('barangbekas.barangbekas', [
            'title' => 'Halaman Barang Bekas',
            'navtitle' => 'Barang Bekas',
            'barang' => Barangbekas::where('category_id', $id)->get()
        ]);
    }

    // halaman untuk single produk barang bekas
    public function show($id) {
        return view('barangbekas.detailbarangbekas', [
            'title' => 'Detail Barang Bekas',
            'navtitle' => 'Barang Bekas',
            'detailbarang' => Barangbekas::findOrFail($id)
        ]);
    }



    // public function show(DetailBarangBekas $detailbarangbekas) {
    //     return view('detailbarangbekas', [
    //         'title' => 'Halaman Detail Barang Bekas',
    //         'navtitle' => 'Detail Barang Bekas',
    //         'barangs' => $detailbarangbekas->barangbekas
    //     ]);
    // }
}
