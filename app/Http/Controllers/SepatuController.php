<?php

namespace App\Http\Controllers;

use App\Models\Sepatu;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SepatuController extends Controller
{
    //halaman untuk all post
    public function index() {
        return view('sepatu.sepatu',[
            'title' => 'Halaman Sepatu',
            'navtitle' => 'Sepatu',
            'sepatus' => Sepatu::all()
        ]);
    }

    //halaman untuk berdasarkan kategori
    public function category($id) {
        return view('sepatu.sepatu', [
            'title' => 'Halaman Sepatu',
            'navtitle' => 'Sepatu',
            'sepatus' => Sepatu::where('category_id', $id)->get()
        ]);
    }

    //halaman untuk single produk sepatu
    public function show($id) {
        return view('sepatu.detailsepatu', [
            'title' => 'Detail Sepatu',
            'navtitle' => 'Sepatu',
            'detailsepatu' => Sepatu::findOrFail($id)
        ]);
    }

    // halaman untuk single post
    // public function show(DetailSepatu $detailsepatu) {
    //     return view('detailsepatu',[
    //         'title' => 'Detail Sepatu',
    //         'navtitle' => 'Detail Sepatu',
    //         'detailsepatus' => $detailsepatu->sepatu
    //         // 'sepatus' => $sepatu
    //     ]);
    // }

}
?>
