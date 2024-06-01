<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sepatu;

class BerandaController extends Controller
{
    public function index() {
        return view('home.index',[
            'title' => 'Halaman Beranda',
            'navtitle' => 'Beranda',
            'sepatus' => Sepatu::all()
        ]);
    }
}
